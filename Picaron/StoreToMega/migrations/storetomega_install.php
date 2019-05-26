<?php
/**
 * StoreToMega extension for the phpBB >=3.2.0 Forum Software package.
 * @copyright (c) 2017 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace Picaron\StoreToMega\migrations;

class storetomega_install extends \phpbb\db\migration\migration
{
    public function effectively_installed()
    {
        return !empty($this->config['version_storetomega']);
    }
    
    public function update_data()
    {
        return array(
            // Add config
            array('config.add', array('version_storetomega', '0.9.9')),
            array('config.add', array('url_storetomega_home', '')),
            array('config.add', array('mega_storetomega_user', '')),
            array('config.add', array('mega_storetomega_pass', '')), 
            array('config.add', array('file_storetomega_size', 5)),            
        );
    }

    public function revert_data()
    {
        return array(
            // Delete config
            array('config.remove', array('version_storetomega')),
            array('config.remove', array('url_storetomega_home')),
            array('config.remove', array('mega_storetomega_user')),
            array('config.remove', array('mega_storetomega_pass')),    
            array('config.remove', array('file_storetomega_size')),            
        );
    }

}
?>