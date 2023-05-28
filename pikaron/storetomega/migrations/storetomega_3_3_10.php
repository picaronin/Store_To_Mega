<?php
/**
 *
 * Store To Mega extension for the phpBB >=3.2.8 Forum Software package.
 *
 * @copyright (c) 2023 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\storetomega\migrations;

class storetomega_3_3_10 extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array(
            '\pikaron\storetomega\migrations\storetomega_3_2_8',
        );
    }

    public function update_data()
    {
        return array(
            array('config.update', array('version_storetomega', '3.3.10')),
        );
    }
}
