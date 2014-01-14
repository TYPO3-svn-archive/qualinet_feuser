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
class OptionsService {
	
	/**
	 * @var \BLSV\qualinet2012\Domain\Repository\JobtitleRepository
	 * @inject
	 */
	protected $jobtitleRepository = NULL;
	
	/**
	 * @var Tx_StaticInfoTablesExtbase_Domain_Repository_StaticCountryRepository
	 * @inject
	 */
	protected $staticCountryRepository = NULL;
	
	
	public function getGender(){
		$gender = array(
			'' => \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('tx_qualinetfeuser_domain_model_feuser.gender_99', 'qualinetFeuser'),
			0 => \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('tx_qualinetfeuser_domain_model_feuser.gender_0', 'qualinetFeuser'),
			1 => \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('tx_qualinetfeuser_domain_model_feuser.gender_1', 'qualinetFeuser'),
		);
		return $gender;
	}
	
	public function getTitle(){
		$jobtitles = $this->jobtitleRepository->findAll();
		
		$title = array();
		$title[''] = '';
		foreach ($jobtitles as $jobtitle){
			$title[$jobtitle->getCode()] = $jobtitle->getDescription();
		}
		return $title;		
	}

	public function getCountry(){
		// $staticCountry = $this->staticCountryZoneRepository->findAll();

		$country = array();
		$country['DE'] = 'DE';
		return $country;
	}
	
	
}
?>