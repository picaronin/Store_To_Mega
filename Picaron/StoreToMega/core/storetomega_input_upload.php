<?php
/**
 * StoreToMega extension for the phpBB >=3.2.0 Forum Software package.
 * @copyright (c) 2017 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace Picaron\StoreToMega\core;

class storetomega_input_upload
{

    /** @var \phpbb\user */
    protected $user;

    /** @var \phpbb\request\request */
    protected $request;

    /**
    * Constructor
    *
    * @param \phpbb\user                        $user
    * @param \phpbb\request\request             $request
    *
    */
    public function __construct(
        \phpbb\user $user,
        \phpbb\request\request $request
    )
    {
        $this->user                         = $user;
        $this->request                      = $request;
    }

    function main()
    {
        global $config;

        $file    = $this->request->file('mega');
        $size    = $config['file_storetomega_size'];
        $root    = $config['url_storetomega_home'];
        $muser   = $config['mega_storetomega_user'];
        $puser   = $config['mega_storetomega_pass'];
        $maxsize = ($size * 1024 *1024);

        $fileName       = isset($file["name"]) ? $file["name"] : '';
        $fileTmpLoc     = isset($file["tmp_name"]) ? $file["tmp_name"] : '';
        $fileType       = isset($file["type"]) ? $file["type"] : '';
        $fileSize       = isset($file["size"]) ? $file["size"] : '';
        $fileErrorMsg   = isset($file["error"]) ? $file["error"] : '';        

        if ($fileTmpLoc != "")
        {
            // Saneamos el nombre del archivo (Los ESPACIOS NO)
            $tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ·()[]{}+";
            $replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn-______-";
            $cadena = utf8_decode($fileName);
            $cadena = strtr($cadena, utf8_decode($tofind), $replac);
            $filen = utf8_encode($cadena);

            $path  = $root . 'ext/Picaron/StoreToMega/tmp/' . $filen; //generate the destination path

            if ($fileSize < $maxsize)
            {
                if (move_uploaded_file($fileTmpLoc, $path))
                {
                    // Saneamos LOS ESPACIOS en el nombre del Archivo para MEGA
                    $nombremega = str_replace(' ', '\ ', $filen);
                    $rutamega = $root . 'ext/Picaron/StoreToMega/tmp/' . $nombremega;

                    $subevis = shell_exec("megaput --reload --path /Root $rutamega -u $muser -p $puser 2>&1");

                    $passo = false;
                    $pos = strpos($subevis, '0KUploaded');
                    if (($pos !== false))
                    {
                        $passo = true;
                        echo sprintf($this->user->lang['FILE_UP_OK_MEGA'], $filen);
                    }

                    $pos = strpos($subevis, 'File already exists');
                    if (($pos !== false))
                    {
                        $passo = true;
                        echo sprintf($this->user->lang['FILE_WARNING_MEGA'], $filen);
                    }

                    if ($passo == false)
                    {
                        echo $this->user->lang['NO_INST_MEGA'];
                        @unlink($path);
                        exit();
                    }
                    
                    $enlace = trim(shell_exec("megals -e --reload /Root/$nombremega -u $muser -p $puser 2>&1"));

                    echo $this->user->lang['LINK_FILE_MEGA'];
                    $salida = explode(' ', $enlace);
                    echo '<input type="text" name="enlacemega" onfocus="this.select();" value="'.$salida[0].'" title="'.$this->user->lang['LINK_TITLE_MEGA'].'" class="inputbox" readonly>';
                } else {
                    echo $this->user->lang['NOT_CACH_FILE_MEGA'];
                }
                // Se elimina el archivo temporal
                @unlink($path);
            } else {
                echo sprintf($this->user->lang['FILE_TO_BIG_MEGA'], $filen, $fileSize, $maxsize);
            }

        } else {
            echo $this->user->lang['NOT_FILE_TO_MEGA']; //No file upload message
        }

        exit();
    }
}
?>