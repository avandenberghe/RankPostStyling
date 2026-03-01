<?php
/**
 *
 * Rank Post Styling. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 PayBas
 * @copyright (c) 2020 Sajaki
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace avathar\rankpoststyling\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\cache\service */
	protected $cache;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request_interface */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	protected $ranks;

	public function __construct(\phpbb\cache\service $cache, \phpbb\config\config $config, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->cache = $cache;
		$this->config = $config;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;

		$this->ranks = $this->cache->obtain_ranks();
	}

	public static function getSubscribedEvents()
	{
		return array(
			'core.acp_ranks_save_modify_sql_ary'   => 'acp_ranks_save_modify_sql_ary',
			'core.acp_ranks_edit_modify_tpl_ary'   => 'acp_ranks_edit_modify_tpl_ary',
			'core.acp_ranks_list_modify_rank_row'  => 'acp_ranks_list_modify_rank_row',

			'core.viewtopic_cache_guest_data'      => 'viewtopic_cache_user',
			'core.viewtopic_cache_user_data'       => 'viewtopic_cache_user',
			'core.viewtopic_modify_post_row'       => 'viewtopic_modify_post',

			'core.memberlist_prepare_profile_data' => 'memberlist_prepare_profile',

			'core.search_get_posts_data'           => 'search_get_posts_data',
			'core.search_modify_tpl_ary'           => 'search_modify_tpl_ary',

			'core.page_header'                     => 'page_header',
		);
	}

	/* Page header - assign global template variables */
	public function page_header()
	{
		$this->template->assign_vars(array(
			'S_PBWOW_SMALL_RANKS' => (bool) $this->config['rps_small_ranks'],
		));
	}

	/* ACP */
	public function acp_ranks_save_modify_sql_ary($event)
	{
		$sql_ary = $event['sql_ary'];
		$sql_ary['rank_style'] = $this->request->variable('rank_style', '');
		$event['sql_ary'] = $sql_ary;

		$this->config->set('rps_small_ranks', $this->request->variable('rps_small_ranks', 0));
	}

	public function acp_ranks_edit_modify_tpl_ary($event)
	{
		$this->user->add_lang_ext('avathar/rankpoststyling', 'rankpoststyling');

		$tpl_ary = $event['tpl_ary'];
		$tpl_ary['RANK_STYLE'] = (isset($event['ranks']['rank_style'])) ? $event['ranks']['rank_style'] : '';
		$tpl_ary['RPS_SMALL_RANKS'] = $this->config['rps_small_ranks'];
		$event['tpl_ary'] = $tpl_ary;
	}

	public function acp_ranks_list_modify_rank_row($event)
	{
		$this->user->add_lang_ext('avathar/rankpoststyling', 'rankpoststyling');

		$rank_row = $event['rank_row'];
		$rank_row['RANK_STYLE'] = (isset($event['row']['rank_style'])) ? $event['row']['rank_style'] : '';
		$event['rank_row'] = $rank_row;
	}

	/* Viewtopic */
	public function viewtopic_cache_user($event)
	{
		$user_cache_data = $event['user_cache_data'];
		$user_cache_data['rank_style'] = $this->get_rank_style($event['row']['user_rank']);
		$event['user_cache_data'] = $user_cache_data;
	}

	public function viewtopic_modify_post($event)
	{
		$post_row = $event['post_row'];
		$post_row['RANK_STYLE'] = $event['user_poster_data']['rank_style'];
		$event['post_row'] = $post_row;
	}

	/* Memberlist */
	public function memberlist_prepare_profile($event)
	{
		$template_data = $event['template_data'];
		$template_data['RANK_STYLE'] = $this->get_rank_style($event['data']['user_rank']);
		$event['template_data'] = $template_data;
	}

	/* Search */
	public function search_get_posts_data($event)
	{
		$array = $event['sql_array'];
		$array['SELECT'] .= ', u.user_rank';
		$event['sql_array'] = $array;
	}

	public function search_modify_tpl_ary($event)
	{
		if ($event['show_results'] == 'posts')
		{
			$tpl_ary = $event['tpl_ary'];
			$tpl_ary['RANK_STYLE'] = $this->get_rank_style($event['row']['user_rank']);
			$event['tpl_ary'] = $tpl_ary;
		}
	}

	/* Get the rank style */
	public function get_rank_style($user_rank)
	{
		$rank_style = '';

		if (!empty($user_rank))
		{
			$rank_style = (isset($this->ranks['special'][$user_rank]['rank_style'])) ? $this->ranks['special'][$user_rank]['rank_style'] : '';
		}

		return $rank_style;
	}
}
