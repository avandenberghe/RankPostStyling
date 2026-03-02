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
	'RANK_STYLE'					=> 'Стиль звания (CSS-класс)',
	'RANK_STYLE_EXPLAIN'			=> 'Введите имя CSS-класса для применения к сообщениям пользователей с этим званием (например, rankpoststyle1). Стили PBWoW3 также поддерживают: blizz, mvp, propass.',
	'RPS_LEGEND'						=> 'Стилизация сообщений по званию',
	'RPS_SMALLRANKS_ENABLE'			=> 'Маленькие изображения званий',
	'RPS_SMALLRANKS_ENABLE_EXPLAIN'	=> 'Отображать изображения званий в виде маленьких значков поверх аватара пользователя вместо стандартной позиции звания. Используется стилями PBWoW3.',
));
