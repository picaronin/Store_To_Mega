<?php
/**
 *
 * Store To Mega extension for the phpBB >=3.2.8 Forum Software package.
 *
 * @copyright (c) 2021 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\storetomega\controller;

class main
{
	/** @var \pikaron\storetomega\core\storetomega_input_upload */
	protected $storetomega_input_upload;

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\request\request */
	protected $request;


	/**
	* Constructor
	*
	* @var \pikaron\storetomega\core\storetomega_input_upload		$storetomega_input_upload
	* @param \phpbb\language\language								$language
	* @param \phpbb\request\request									$request
	*
	*/
	public function __construct(
		\pikaron\storetomega\core\storetomega_input_upload $storetomega_input_upload,
		\phpbb\language\language $language,
		\phpbb\request\request $request
	)
	{
		$this->storetomega_input_upload		= $storetomega_input_upload;
		$this->language						= $language;
		$this->request						= $request;
	}

	public function handle_storetomega()
	{
		$mode = $this->request->variable('mode', '');

		if (!$mode)
		{
			trigger_error($this->language->lang('LINK_ADD_ERROR'), E_USER_WARNING);
		}

		switch ($mode)
		{
			case 'upload':
				$this->storetomega_input_upload->main();
			break;
		}
	}
}
