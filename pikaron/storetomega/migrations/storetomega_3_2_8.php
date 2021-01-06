<?php
/**
 *
 * Store To Mega extension for the phpBB >=3.2.8 Forum Software package.
 *
 * @copyright (c) 2021 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\storetomega\migrations;

class storetomega_3_2_8 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return !empty($this->config['version_storetomega']);
	}

	public function update_data()
	{
		return array(
			// Add config
			array('config.add', array('version_storetomega', '3.2.8')),
			array('config.add', array('mega_storetomega_user', '')),
			array('config.add', array('mega_storetomega_pass', '')),
			array('config.add', array('file_storetomega_size', 2)),
		);
	}

	public function revert_data()
	{
		return array(
			// Delete config
			array('config.remove', array('version_storetomega')),
			array('config.remove', array('mega_storetomega_user')),
			array('config.remove', array('mega_storetomega_pass')),
			array('config.remove', array('file_storetomega_size')),
		);
	}
}
