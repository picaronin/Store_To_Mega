<?php
/**
 * StoreToMega extension for the phpBB >=3.2.0 Forum Software package.
 * @copyright (c) 2017 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace Picaron\StoreToMega;

/**
* Extension class Search Back for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{

    public function is_enableable()
    {
        $config = $this->container->get('config');
        return phpbb_version_compare($config['version'], '3.2.0', '>=');
    }

}
?>