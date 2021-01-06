<?php
/**
 *
 * Store To Mega extension for the phpBB >=3.2.8 Forum Software package.
 *
 * @copyright (c) 2021 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\storetomega\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*
	* @param \phpbb\language\language			$language
	* @param \phpbb\template\template			$template
	*
	*/
	public function __construct(
		\phpbb\language\language $language,
		\phpbb\template\template $template
	)
	{
		$this->language				= $language;
		$this->template				= $template;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'					=> 'load_language_on_setup',
			'core.posting_modify_template_vars' => 'posting_modify_template_vars',
			'core.acp_board_config_edit_add'	=> 'acp_board_config_edit_add',
		);
	}

	// Load Lenguage
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'pikaron/storetomega',
			'lang_set' => 'storetomega',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	//	Display Review
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
			//	Disable Display Review
			$event['mode'] = 'noreply';
		}
	}

	// ACP
	public function acp_board_config_edit_add($event)
	{
		if ($event['mode'] == 'post' && array_key_exists('legend2', $event['display_vars']['vars']))
		{
			$max_filesize =	 str_replace ('M', '', ini_get('upload_max_filesize'));
			$max_size =	 str_replace ('M', '', ini_get('post_max_size'));

			$display_vars = $event['display_vars'];
			$add_config_var = array(
				'legend_storetomega' => 'ACP_STORETOMEGA_SETTINGS',
				'mega_storetomega_user' => array('lang' => 'DISPLAY_STORETOMEGA_USER', 'validate' => 'string', 'type' => 'text:30:50', 'explain' => false),
				'mega_storetomega_pass' => array('lang' => 'DISPLAY_STORETOMEGA_PASS', 'validate' => 'string', 'type' => 'text:30:50', 'explain' => false),
				'file_storetomega_size' => array('lang' => 'DISPLAY_STORETOMEGA_SIZE', 'validate' => 'int:1:' . $max_filesize, 'type' => 'number:0:9999', 'explain' => true, 'append' => ' ' . $this->language->lang('DISPLAY_SSERVER_VARS', $max_filesize, $max_size)),
			);
			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $add_config_var, array('before' =>'legend2'));
			$event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
		}
	}

}
