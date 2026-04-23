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
	'RANK_STYLE'					=> 'Rang-Stil (CSS-Klasse)',
	'RANK_STYLE_EXPLAIN'			=> 'Geben Sie einen oder mehrere CSS-Klassennamen ein, die auf Beiträge von Benutzern mit diesem Rang angewendet werden. Eingebaut: rps-developer, rps-support, rps-moderator, rps-founder, rps-mvp, rps-styles. PBWoW3-Styles unterstützen auch: blizz, mvp, propass.',
	'RPS_LEGEND'						=> 'Rang-Beitragsstil',
	'RPS_SMALLRANKS_ENABLE'			=> 'Kleine Rangbilder',
	'RPS_SMALLRANKS_ENABLE_EXPLAIN'	=> 'Rangbilder als kleine Overlay-Symbole auf dem Benutzer-Avatar anzeigen, anstatt an der Standard-Rangposition. Wird von PBWoW3-Styles verwendet.',
));
