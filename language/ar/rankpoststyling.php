<?php
/**
 *
 * Rank Post Styling. An extension for the phpBB Forum Software package.
 * Arabic translation by Basil Taha Alhitary (www.alhitary.net)
 *
 * @copyright (c) 2015 PayBas
 * @copyright (c) 2020 Sajaki
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RANK_STYLE'					=> 'تصميم الرُتب ( لغة الـCSS )',
	'RANK_STYLE_EXPLAIN'			=> 'أدخل اسم فئة CSS لتطبيقها على مشاركات المستخدمين ذوي هذه الرتبة (مثال: rankpoststyle1). أنماط PBWoW3 تدعم أيضاً: blizz، mvp، propass.',
	'RPS_LEGEND'						=> 'تنسيق مشاركات الرتب',
	'RPS_SMALLRANKS_ENABLE'			=> 'صور الرتب الصغيرة',
	'RPS_SMALLRANKS_ENABLE_EXPLAIN'	=> 'عرض صور الرتب كأيقونات صغيرة متراكبة على صورة المستخدم بدلاً من الموضع القياسي للرتبة. يُستخدم مع أنماط PBWoW3.',
));
