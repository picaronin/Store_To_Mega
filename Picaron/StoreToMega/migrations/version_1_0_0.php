<?php
/**
 * StoreToMega extension for the phpBB >=3.2.0 Forum Software package.
 * @copyright (c) 2017 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace Picaron\StoreToMega\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array(
            '\Picaron\StoreToMega\migrations\storetomega_install',
        );
    }

    public function update_data()
    {
        return array(
            array('config.update', array('version_storetomega', '1.0.0')),
        );
    }
}