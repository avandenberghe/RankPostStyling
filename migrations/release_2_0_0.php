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

namespace avathar\rankpoststyling\migrations;

class release_2_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'ranks', 'rank_style');
	}

	public function update_schema()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'ranks' => array(
					'rank_style' => array('VCHAR:255', ''),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns' => array(
				$this->table_prefix . 'ranks' => array(
					'rank_style',
				),
			),
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('rps_version', '2.0.0')),
			array('config.add', array('rps_small_ranks', 0)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('rps_version')),
			array('config.remove', array('rps_small_ranks')),
		);
	}
}
