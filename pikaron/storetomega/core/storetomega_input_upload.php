<?php
/**
 *
 * Store To Mega extension for the phpBB >=3.2.8 Forum Software package.
 *
 * @copyright (c) 2021 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\storetomega\core;

class storetomega_input_upload
{
	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\request\request */
	protected $request;

	/**
	* Constructor
	*
	* @param \phpbb\language\language			$language
	* @param \phpbb\request\request				$request
	*
	*/
	public function __construct(
		\phpbb\language\language $language,
		\phpbb\request\request $request
	)
	{
		$this->language				= $language;
		$this->request				= $request;
	}

	function main()
	{
		global $config;

		$file	 = $this->request->file('mega');
		$muser	 = $config['mega_storetomega_user'];
		$puser	 = $config['mega_storetomega_pass'];
		$size	 = $config['file_storetomega_size'];
		$maxsize = ($size * 1024 * 1024);

		$fileName		= isset($file["name"]) ? $file["name"] : '';
		$fileTmpLoc		= isset($file["tmp_name"]) ? $file["tmp_name"] : '';
		$fileSize		= isset($file["size"]) ? $file["size"] : '';

		if ($fileTmpLoc != "")
		{
			// We clean the file name (NO SPACES)
			$tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ·()[]{}+";
			$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn-______-";
			$cadena = utf8_decode($fileName);
			$cadena = strtr($cadena, utf8_decode($tofind), $replac);
			$filen = utf8_encode($cadena);

			// Generate the destination path
			$path  = './ext/pikaron/storetomega/tmp/' . $filen;

			if ($fileSize < $maxsize)
			{
				if (move_uploaded_file($fileTmpLoc, $path))
				{
					// We sanitize THE SPACES in the name of the Archive for MEGA
					$namemega = str_replace(' ', '\ ', $filen);
					$tomega = './ext/pikaron/storetomega/tmp/' . $namemega;

					$subevis = shell_exec("megaput --reload --path /Root $tomega -u $muser -p $puser 2>&1");

					$passo = false;
					if (strpos($subevis, '0KUploaded') !== false || strpos($subevis, 'Uploaded') !== false)
					{
						$passo = true;
						echo $this->language->lang('FILE_UP_OK_MEGA', $filen);
					}

					$pos = strpos($subevis, 'File already exists');
					if (($pos !== false))
					{
						$passo = true;
						echo '<p class="error">' . $this->language->lang('FILE_WARNING_MEGA', $filen) . '</p>';
					}

					if (strpos($subevis, 'Enter password') !== false || strpos($subevis, 'Option parsing failed') !== false)
					{
						echo '<p class="error">' . $this->language->lang('VARS_WARNING_MEGA') . '</p>';
						@unlink($path);
						exit();
					}

					if ($passo == false)
					{
						echo '<p class="error">' . $this->language->lang('NO_INST_MEGA') . '</p>';
						@unlink($path);
						exit();
					}

					$lnk_mega = explode(' ', trim(shell_exec("megals -e --reload /Root/$namemega -u $muser -p $puser 2>&1")));
					echo $this->language->lang('LINK_FILE_MEGA');
					echo '<input type="text" name="enlacemega" onfocus="this.select();" value="'.$lnk_mega[0].'" title="'.$this->language->lang('LINK_TITLE_MEGA').'" class="inputbox" readonly>';
				} else {
					echo '<p class="error">' . $this->language->lang('NOT_CACH_FILE_MEGA') . '</p>';
				}
				// The temporary file is deleted
				@unlink($path);
			} else {
				echo '<p class="error">' . $this->language->lang('FILE_TO_BIG_MEGA', $filen, $fileSize, $maxsize) . '</p>';
			}
		} else {
			// No file upload message
			echo '<p class="error">' . $this->language->lang('NOT_FILE_TO_MEGA') . '</p>';
		}
		exit();
	}
}
