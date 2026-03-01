<?php
/**
 *
 * Rank Post Styling. An extension for the phpBB Forum Software package.
 * French translation by Galixte
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
	'RANK_STYLE'					=> 'Style de rang (classe CSS)',
	'RANK_STYLE_EXPLAIN'			=> 'Entrez un nom de classe CSS à appliquer aux messages des utilisateurs ayant ce rang (ex. blizz, mvp, propass).',
	'RPS_LEGEND'						=> 'Style des messages par rang',
	'RPS_SMALLRANKS_ENABLE'			=> 'Petites images de rang',
	'RPS_SMALLRANKS_ENABLE_EXPLAIN'	=> 'Affiche les images de rang sous forme de petites icônes superposées sur l\'avatar de l\'utilisateur au lieu de la position standard du rang. Utilisé par les styles PBWoW3.',
));
