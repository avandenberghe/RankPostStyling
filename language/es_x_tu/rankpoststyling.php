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
	'RANK_STYLE'					=> 'Estilo del rango (clase CSS)',
	'RANK_STYLE_EXPLAIN'			=> 'Introduce uno o más nombres de clase CSS para aplicar a las publicaciones de usuarios con este rango. Integradas: rps-developer, rps-support, rps-moderator, rps-founder, rps-mvp, rps-styles. Los estilos PBWoW3 también soportan: blizz, mvp, propass.',
	'RPS_LEGEND'						=> 'Estilo de publicaciones por rango',
	'RPS_SMALLRANKS_ENABLE'			=> 'Imágenes de rango pequeñas',
	'RPS_SMALLRANKS_ENABLE_EXPLAIN'	=> 'Muestra las imágenes de rango como pequeños iconos superpuestos en el avatar del usuario en lugar de en la posición estándar del rango. Usado por los estilos PBWoW3.',
));
