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

class release_2_0_1 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array(
			'\avathar\rankpoststyling\migrations\release_2_0_0',
		);
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('rps_version')),
		);
	}
}
