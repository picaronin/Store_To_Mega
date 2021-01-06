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
	'TITLE_LINK_MEGA'			=> 'Subir Archivo a MEGA',
	'LINK_EXPLAIN_MEGA'			=> 'Desde esta sección podrá subir y hospedar en MEGA cualquier arhivo con un tamaño MÁXIMO de ',
	'ADD_FILE_MEGA'				=> 'Subir Archivo a Cuenta MEGA',
	'BUTTOM_TO_MEGA'			=> 'Subir Archivo',
	'ADD_FILE_PC'				=> 'Seleccione un Archivo desde su PC',
	'ADD_NOTE_MEGA'				=> '<i>Nota: Copie el link de descarga generado y utilicelo para crear un "Enlace de Descarga" en el Foro</i>',
	'NOT_FILE_TO_MEGA'			=> 'No se ha seleccionado ningún archivo para Subir',
	'FILE_TO_BIG_MEGA'			=> 'El Archivo: <b>%1$s</b><br>es demasiado grande (%2$s bytes) Maximo Tamaño: %3$s bytes',
	'NOT_CACH_FILE_MEGA'		=> 'La subida ha fallado. No se ha podido cachear el archivo.',
	'FILE_UP_OK_MEGA'			=> 'Subida del Archivo --- <b>%1$s</b> --- a MEGA, Realizada Correctamente.<br><br>',
	'FILE_WARNING_MEGA'			=> 'ADVERTENCIA: Proceso de Subida a MEGA.<br>El Archivo ---  <b>%1$s</b> --- Ya existe en MEGA.<br>Se facilita enlace de descarga del archivo existente en MEGA<br>',
	'LINK_FILE_MEGA'			=> 'Enlace de Descarga<br>',
	'LINK_TITLE_MEGA'			=> 'Click -> Botón Derecho -> Copiar',
	'LINK_ADD_ERROR'			=> '!! ERROR INESPERADO EN LA GESTION DE Store To Mega !!',
	'NO_INST_MEGA'				=> 'ERROR de Megatools: Esta Extensión necesita la herramienta <a href="https://megatools.megous.com/" target="_blank">Megatools</a> instalada y habilitada en el Servidor.<br>',
	'HMTL_UP_PORCE_MEGA'		=> 'Subidos',
	'HMTL_UP_BYTES_MEGA'		=> 'bytes de',
	'HMTL_UP_TOTAL_MEGA'		=> '% Subido... Por favor, espere.',
	'HMTL_UP_FAILED_MEGA'		=> 'La Subida ha Fallado',
	'HMTL_UP_CANCEL_MEGA'		=> 'La Subida se ha Cancelado',
	'STORETOMEGA_VERSION'		=> 'Versión',
	'VARS_WARNING_MEGA'			=> 'ERROR de Megatools: Faltan o son erroneos los datos de acceso a la cuenta de MEGA.<br>Informe de este error a los moderadores del Foro.',

	// INSTALL
	'MEGATOOLS_ERROR'			=> 'Store To Mega no se puede instalar.<br><br>- Se requiere la herramienta <b>Megatools</b> instalada y habilitada en el Servidor.',
	'LINUX_ERROR'				=> 'Store To Mega no se puede instalar.<br><br>- Se requiere un servidor con <b>Debian</b> o <b>Ubuntu</b>.',
	'PHPBB_ERROR'				=> 'Store To Mega no se puede instalar.<br><br>- Se requiere phpBB 3.2.8 o posterior.',
	'PHP_ERROR'					=> 'Store To Mega no se puede instalar.<br><br>- Se requiere php 7.1.0 o posterior.',
	'OLD_VERSION_ERROR'			=> 'Store To Mega no se puede instalar.<br><br>Existe una versión obsoleta de la extension instalada.<br><br>Antes de instalar la nueva version, es necesario desinstalar completamente la version StoreToMega_%1$s<br><br>Puede descargar la version obsoleta desde el siguiente enlace <a href="http://www.siteproall.com/StoreToMega/StoreToMega_%2$s.zip">Descargar StoreToMega_%3$s</a>.',

	// ACP
	'ACP_STORETOMEGA_SETTINGS'			=> 'Extensión: Store To Mega',
	'DISPLAY_STORETOMEGA_USER'			=> 'Cuenta en MEGA: Nombre de Usuario',
	'DISPLAY_STORETOMEGA_PASS'			=> 'Cuenta en MEGA: Contraseña',
	'DISPLAY_STORETOMEGA_SIZE'			=> 'Tamaño Máximo de Archivo a Subir en MB',
	'DISPLAY_STORETOMEGA_SIZE_EXPLAIN'	=> '<br><br>Su servidor tiene las siguientes limitaciones:',
	'DISPLAY_SSERVER_VARS'				=> '<br><br>upload_max_filesize: <b>%1$s MB</b><br>post_max_size: <b>%2$s MB</b>',
));
