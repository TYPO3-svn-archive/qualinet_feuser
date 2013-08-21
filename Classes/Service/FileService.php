<?php
namespace BLSV\QualinetFeuser\Service;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Martin Gonschor <martin.gonschor@blsv.de>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package qualinet_feuser
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class FileService {

	/**
	 * File uploaden
	 * 
	 * @param string $fileTemp
	 * @param string $fileName
	 * @param string $uploadPath
	 * @return mixed
	 */
	public function uploadImage($fileTemp, $fileName, $uploadPath){
		$res = false;
		$basicFileFunctions = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('t3lib_basicFileFunctions');
		$fileName = $basicFileFunctions->cleanFileName($fileName);
		$uploadPath = $basicFileFunctions->cleanDirectoryName($uploadPath);
		$fileUpload = $basicFileFunctions->getUniqueName($fileName, $uploadPath);
		
		$info = getimagesize($fileTemp);
		if ($info && move_uploaded_file($fileTemp, $fileUpload)){
			$res = basename($fileUpload);
		}
		return $res;
	}
	
	public function remove($file, $path){
		unlink($path.$file);
	}

}
?>