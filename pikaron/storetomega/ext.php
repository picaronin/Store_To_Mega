<?php
/**
 *
 * Store To Mega extension for the phpBB >=3.2.8 Forum Software package.
 *
 * @copyright (c) 2021 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\storetomega;

/**
* Extension class Store To Mega for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
    /**
    * Check whether or not the extension can be enabled.
    * @return bool
    * @access public
    */
    public function is_enableable()
    {
        $config = $this->container->get('config');
        $language = $this->container->get('language');
        $language->add_lang('storetomega', 'pikaron/storetomega');

        // Verify if there is a previous version installed
        if (isset($config['version_storetomega']) && phpbb_version_compare($config['version_storetomega'], '3.2.8', '<'))
        {
            trigger_error($language->lang('OLD_VERSION_ERROR', $config['version_storetomega'], $config['version_storetomega'], $config['version_storetomega']), E_USER_WARNING);
        }

        /**
         * Check Server requirements
         *
         * Requires Debian or Ubuntu
         *
         * @return bool
         */

        // Display a custom warning message if requirement fails.
        $linux = shell_exec("lsb_release -a 2>&1");

        if (strpos($linux, 'Debian') === false && strpos($linux, 'Ubuntu') === false)
        {
            trigger_error($language->lang('LINUX_ERROR'), E_USER_WARNING);
        }

        /**
         * Check Megatools requirements
         *
         * Requires Megatools installed
         *
         * @return bool
         */

        // Display a custom warning message if requirement fails.
        $mega = shell_exec("megatools 2>&1");

        if (strpos($mega, 'megatools 1.1') === false)
        {
            trigger_error($language->lang('MEGATOOLS_ERROR'), E_USER_WARNING);
        }

        /**
         * Check phpBB requirements
         *
         * Requires phpBB 3.2.8 or greater
         *
         * @return bool
         */
        $is_ver_phpbb = phpbb_version_compare($config['version'], '3.2.8', '>=');

        // Display a custom warning message if requirement fails.
        if (!$is_ver_phpbb)
        {
            trigger_error($language->lang('PHPBB_ERROR'), E_USER_WARNING);
        }

        /**
         * Check PHP requirements
         *
         * Requires PHP 7.1.0 or greater
         *
         * @return bool
         */
        $is_ver_php = phpbb_version_compare(PHP_VERSION, '7.1.0', '>=');

        // Display a custom warning message if requirement fails.
        if (!$is_ver_php)
        {
            trigger_error($language->lang('PHP_ERROR'), E_USER_WARNING);
        }

        return true;
    }
}
