<?php
/**
*
* StoreToMega System
*
* @package main (English)
* StoreToMega extension for the phpBB >=3.2.0 Forum Software package.
* @copyright (c) 2017 Picaron
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
    'TITLE_LINK_MEGA'           => 'Upload File to MEGA',
    'LINK_EXPLAIN_MEGA'         => 'From this section you can upload and host in MEGA any file with a MAXIMUM size of ',
    'ADD_FILE_MEGA'             => 'Upload File to MEGA Account',
    'BUTTOM_TO_MEGA'            => 'Upload File',
    'ADD_FILE_PC'               => 'Select a file from your PC',
    'ADD_NOTE_MEGA'             => '<i>Note: Copy the generated download link and use it to create a "Download Link" in the Forum</i>',
    'NOT_FILE_TO_MEGA'          => 'No files to Upload',
    'FILE_TO_BIG_MEGA'          => 'The file <b>%1$s</b> is too big ( %2$s ) Max Size: %3$s bytes',
    'NOT_CACH_FILE_MEGA'        => 'The upload failed. Failed to cache file.',
    'FILE_UP_OK_MEGA'           => 'Upload File --- <b>%1$s</b> --- to MEGA, Done Correctly.<br><br>',
    'FILE_WARNING_MEGA'         => 'WARNING: Upload process to MEGA.<br>File ---  <b>%1$s</b> --- It already exists in MEGA.<br>MEGA file download link is provided.<br><br>',
    'LINK_FILE_MEGA'            => 'Download Link<br>',
    'LINK_TITLE_MEGA'           => 'Click -> Right button -> Copy',
    'NO_INST_MEGA'              => 'Megatools ERROR: This Extension needs the <a href="https://megatools.megous.com/" target="_blank">Megatools</a> tool installed on the Server.<br>',
    'HMTL_UP_PORCE_MEGA'        => 'Uploaded',
    'HMTL_UP_BYTES_MEGA'        => 'bytes of',
    'HMTL_UP_TOTAL_MEGA'        => '% Uploaded... Please Wait.',
    'HMTL_UP_FAILED_MEGA'       => 'Upload has Failed',
    'HMTL_UP_CANCEL_MEGA'       => 'Upload has Canceled',
    'STORETOMEGA_VERSION'       => 'Release',      

    // ACP
    'ACP_STORETOMEGA_SETTINGS'          => 'Extension: Store To Mega',
    'L_DISPLAY_STORETOMEGA_URL'         => 'Server ROOT_PATH',
    'L_DISPLAY_STORETOMEGA_URL_EXPLAIN' => 'Example: /var/www/clients/client1/web1/web/',
    'L_DISPLAY_STORETOMEGA_USER'        => 'Account in MEGA: User Name',
    'L_DISPLAY_STORETOMEGA_PASS'        => 'Account in MEGA: Password',
    'L_DISPLAY_STORETOMEGA_SIZE'        => 'Maximum File Size to Upload in MB',
));

?>