<?php
/**
 * StoreToMega extension for the phpBB >=3.2.0 Forum Software package.
 * @copyright (c) 2017 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace Picaron\StoreToMega\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
    /** @var \phpbb\user */
    protected $user;

    /** @var \phpbb\template\template */
    protected $template;

    /**
    * Constructor
    *
    * @param \phpbb\user                        $user
    * @param \phpbb\template\template           $template
    *
    */
    public function __construct(
        \phpbb\user $user,
        \phpbb\template\template $template
    )
    {
        $this->user                 = $user;
        $this->template             = $template;
    }

    static public function getSubscribedEvents()
    {
        return array(
            'core.user_setup'                   => 'load_language_on_setup',
            'core.posting_modify_template_vars' => 'posting_modify_template_vars',
            'core.acp_board_config_edit_add'    => 'acp_board_config_edit_add',
        );
    }

    // Load Lenguage
    public function load_language_on_setup($event)
    {
        $lang_set_ext = $event['lang_set_ext'];
        $lang_set_ext[] = array(
            'ext_name' => 'Picaron/StoreToMega',
            'lang_set' => 'storetomega',
        );
        $event['lang_set_ext'] = $lang_set_ext;
    }

    //  Display Review
    public function posting_modify_template_vars($event)
    {
        global $config;

        $this->template->assign_vars(array(
            'MAX_SIZE_FILE_MEGA' => $config['file_storetomega_size'] . ' MB',
            'STORETOMEGA_RELEASE' => $config['version_storetomega'],
        ));

        // Topic review
        if ($event['mode'] != 'noreply')
        {
            if ($event['mode'] == 'reply' || $event['mode'] == 'quote')
            {
                if (topic_review($event['topic_id'], $event['forum_id']))
                {
                    $this->template->assign_vars(array(
                        'DISPLAY_REVIEW_STORETOMEGA' => true,
                    ));
                }
            }
            //  Disable Display Review
            $event['mode'] = 'noreply';
        }
    }

    // ACP
    public function acp_board_config_edit_add($event)
    {
        if ($event['mode'] == 'post')
        {
            $display_vars = $event['display_vars'];
            $add_config_var = array(
                'legend67' => 'ACP_STORETOMEGA_SETTINGS',
                'url_storetomega_home' => array('lang' => 'L_DISPLAY_STORETOMEGA_URL', 'validate' => 'string', 'type' => 'text:60:100', 'explain' => true),
                'mega_storetomega_user' => array('lang' => 'L_DISPLAY_STORETOMEGA_USER', 'validate' => 'string', 'type' => 'text:30:50', 'explain' => false),
                'mega_storetomega_pass' => array('lang' => 'L_DISPLAY_STORETOMEGA_PASS', 'validate' => 'string', 'type' => 'text:30:50', 'explain' => false),
                'file_storetomega_size' => array('lang' => 'L_DISPLAY_STORETOMEGA_SIZE', 'validate' => 'int:1:20', 'type' => 'number:0:99999', 'explain' => false),
            );
            $display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $add_config_var, array('after' =>'allow_quick_reply'));
            $event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
        }
    }

}
?>