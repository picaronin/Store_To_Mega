<?php
/**
*
* StoreToMega System
*
* @package main (Spanish)
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
    'TITLE_LINK_MEGA'           => 'Subir Archivo a MEGA',
    'LINK_EXPLAIN_MEGA'         => 'Desde esta sección podrá subir y hospedar en MEGA cualquier arhivo con un tamaño MÁXIMO de ',
    'ADD_FILE_MEGA'             => 'Subir Archivo a Cuenta MEGA',
    'BUTTOM_TO_MEGA'            => 'Subir Archivo',
    'ADD_FILE_PC'               => 'Seleccione un Archivo desde su PC',
    'ADD_NOTE_MEGA'             => '<i>Nota: Copie el link de descarga generado y utilicelo para crear un "Enlace de Descarga" en el Foro</i>',
    'NOT_FILE_TO_MEGA'          => 'No hay archivos para Subir',
    'FILE_TO_BIG_MEGA'          => 'El Archivo <b>%1$s</b> es demasiado grande ( %2$s ) Maximo Tamaño: %3$s bytes',
    'NOT_CACH_FILE_MEGA'        => 'La subida ha fallado. No se ha podido cachear el archivo.',
    'FILE_UP_OK_MEGA'           => 'Subida del Archivo --- <b>%1$s</b> --- a MEGA, Realizada Correctamente.<br><br>',
    'FILE_WARNING_MEGA'         => 'ADVERTENCIA: Proceso de Subida a MEGA.<br>El Archivo ---  <b>%1$s</b> --- Ya existe en MEGA.<br>Se facilita enlace de descarga del archivo existente en MEGA<br><br>',
    'LINK_FILE_MEGA'            => 'Enlace de Descarga<br>',
    'LINK_TITLE_MEGA'           => 'Click -> Botón Derecho -> Copiar',
    'NO_INST_MEGA'              => 'ERROR de Megatools: Esta Extensión necesita la herramienta <a href="https://megatools.megous.com/" target="_blank">Megatools</a> instalada en el Servidor.<br>',
    'HMTL_UP_PORCE_MEGA'        => 'Subidos',
    'HMTL_UP_BYTES_MEGA'        => 'bytes de',
    'HMTL_UP_TOTAL_MEGA'        => '% Subido... Por favor, espere.',
    'HMTL_UP_FAILED_MEGA'       => 'La Subida ha Fallado',
    'HMTL_UP_CANCEL_MEGA'       => 'La Subida se ha Cancelado',
    'STORETOMEGA_VERSION'       => 'Versión',    

    // ACP
    'ACP_STORETOMEGA_SETTINGS'          => 'Extensión: Store To Mega',
    'L_DISPLAY_STORETOMEGA_URL'         => 'ROOT_PATH del Servidor',
    'L_DISPLAY_STORETOMEGA_URL_EXPLAIN' => 'Ejemplo: /var/www/clients/client1/web1/web/',
    'L_DISPLAY_STORETOMEGA_USER'        => 'Cuenta en MEGA: Nombre de Usuario',
    'L_DISPLAY_STORETOMEGA_PASS'        => 'Cuenta en MEGA: Contraseña',
    'L_DISPLAY_STORETOMEGA_SIZE'        => 'Tamaño Máximo de Archivo a Subir en MB',
));

?>