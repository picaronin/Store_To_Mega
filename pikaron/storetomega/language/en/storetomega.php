<?php
/**
 *
 * Store To Mega extension for the phpBB >=3.2.8 Forum Software package.
 *
 * @copyright (c) 2021 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TITLE_LINK_MEGA'			=> 'Upload File to MEGA',
	'LINK_EXPLAIN_MEGA'			=> 'From this section you can upload and host in MEGA any file with a MAXIMUM size of ',
	'ADD_FILE_MEGA'				=> 'Upload File to MEGA Account',
	'BUTTOM_TO_MEGA'			=> 'Upload File',
	'ADD_FILE_PC'				=> 'Select a file from your PC',
	'ADD_NOTE_MEGA'				=> '<i>Note: Copy the generated download link and use it to create a "Download Link" in the Forum</i>',
	'NOT_FILE_TO_MEGA'			=> 'No file has been selected for Upload',
	'FILE_TO_BIG_MEGA'			=> 'The file: <b>%1$s</b><br>is too big (%2$s bytes) Max Size: %3$s bytes',
	'NOT_CACH_FILE_MEGA'		=> 'The upload failed. Failed to cache file.',
	'FILE_UP_OK_MEGA'			=> 'Upload File --- <b>%1$s</b> --- to MEGA, Done Correctly.<br><br>',
	'FILE_WARNING_MEGA'			=> 'WARNING: Upload process to MEGA.<br>File ---  <b>%1$s</b> --- It already exists in MEGA.<br>MEGA file download link is provided.<br><br>',
	'LINK_FILE_MEGA'			=> 'Download Link<br>',
	'LINK_TITLE_MEGA'			=> 'Click -> Right button -> Copy',
	'LINK_ADD_ERROR'			=> '!! UNEXPECTED ERROR IN THE MANAGEMENT OF Store To Mega !!',
	'NO_INST_MEGA'				=> 'Megatools ERROR: This Extension needs the <a href="https://megatools.megous.com/" target="_blank">Megatools</a> tool installed on the Server.<br>',
	'HMTL_UP_PORCE_MEGA'		=> 'Uploaded',
	'HMTL_UP_BYTES_MEGA'		=> 'bytes of',
	'HMTL_UP_TOTAL_MEGA'		=> '% Uploaded... Please Wait.',
	'HMTL_UP_FAILED_MEGA'		=> 'Upload has Failed',
	'HMTL_UP_CANCEL_MEGA'		=> 'Upload has Canceled',
	'STORETOMEGA_VERSION'		=> 'Release',
	'VARS_WARNING_MEGA'			=> 'ERROR by Megatools: MEGA account access data is missing or wrong.<br>Report this error to the forum moderators.',

	// INSTALL
	'MEGATOOLS_ERROR'			=> 'Store To Mega cannot be installed.<br><br>- Required the <b>Megatools</b> tool installed and enabled on the Server.',
	'LINUX_ERROR'				=> 'Store To Mega cannot be installed.<br><br>- Required server under <b>Debian</b> or <b>Ubuntu</b>.',
	'PHPBB_ERROR'				=> 'Store To Mega cannot be installed.<br><br>- PhpBB 3.2.8 or later is required.',
	'PHP_ERROR'					=> 'Store To Mega cannot be installed.<br><br>- PHP 7.1.0 or later is required.',
	'OLD_VERSION_ERROR'			=> 'Store To Mega cannot be installed.<br><br>There is an obsolete version of the extension installed.<br><br>Before installing the new version, it is necessary to completely uninstall the StoreToMega_%1$s version<br><br>You can download the obsolete version from the following link <a href="http://www.siteproall.com/StoreToMega/StoreToMega_%2$s.zip">Download StoreToMega_%3$s</a>.',

	// ACP
	'ACP_STORETOMEGA_SETTINGS'			=> 'Extension: Store To Mega',
	'DISPLAY_STORETOMEGA_USER'			=> 'Account in MEGA: User Name',
	'DISPLAY_STORETOMEGA_PASS'			=> 'Account in MEGA: Password',
	'DISPLAY_STORETOMEGA_SIZE'			=> 'Maximum File Size to Upload in MB',
	'DISPLAY_STORETOMEGA_SIZE_EXPLAIN'	=> '<br><br>Your server has the following limitations:',
	'DISPLAY_SSERVER_VARS'				=> '<br><br>upload_max_filesize: <b>%1$s MB</b><br>post_max_size: <b>%2$s MB</b>',
));
