<?php
namespace BLSV\QualinetFeuser\Controller;

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
class FeuserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * feuserRepository
	 *
	 * @var \BLSV\QualinetFeuser\Domain\Repository\FeuserRepository
	 * @inject
	 */
	protected $feuserRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$feusers =  $this->feuserRepository->findAll( );
		$this->view->assign('feusers', $feusers);
	}

	/**
	 * action show
	 *
	 * @param \BLSV\QualinetFeuser\Domain\Model\Feuser $feuser
	 * @return void
	 */
	public function showAction(\BLSV\QualinetFeuser\Domain\Model\Feuser $feuser) {
		$this->view->assign('feuser', $feuser);
	}

	/**
	 * action new
	 *
	 * @param \BLSV\QualinetFeuser\Domain\Model\Feuser $newFeuser
	 * @dontvalidate $newFeuser
	 * @return void
	 */
	public function newAction(\BLSV\QualinetFeuser\Domain\Model\Feuser $newFeuser = NULL) {
		$this->view->assign('newFeuser', $newFeuser);
	}

	/**
	 * action create
	 *
	 * @param \BLSV\QualinetFeuser\Domain\Model\Feuser $newFeuser
	 * @return void
	 */
	public function createAction(\BLSV\QualinetFeuser\Domain\Model\Feuser $newFeuser) {
		$this->feuserRepository->add($newFeuser);
		$this->flashMessageContainer->add('Your new Feuser was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @return void
	 */
	public function editAction() {
		$feuser =  $this->feuserRepository->findByUid( $GLOBALS['TSFE']->fe_user->user['uid'] );

		// $optionsService = new \BLSV\QualinetFeuser\Service\OptionsService();
		$optionsService = $this->objectManager->create('BLSV\QualinetFeuser\Service\OptionsService');
		
		$this->view->assign('feuser', $feuser);
		$this->view->assign('options', $optionsService);
	}

	/**
	 * action initializeUpdate
	 * @return void
	 */
	public function initializeUpdateAction() {
		if ($this->arguments->hasArgument('feuser')) {
			$propertyMappingConfig = $this->arguments['feuser']->getPropertyMappingConfiguration();
			
			// Geburtsdatum konvertieren
			$propertyMappingConfig->forProperty('dateOfBirth')
				->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter',
					\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT,'d.m.Y');

			// Richtigkeitsdatum konvertieren
			$propertyMappingConfig->forProperty('datumrichtigkeit')
				->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter',
					\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT,'d.m.Y');
			
			// Passbild-Upload konvertieren
			$propertyMappingConfig->setTargetTypeForSubProperty('passbildUpload', 'array');
		}
	}
	
	/**
	 * action update
	 *
	 * @param \BLSV\QualinetFeuser\Domain\Model\Feuser $feuser
	 * @return void
	 */
	public function updateAction(\BLSV\QualinetFeuser\Domain\Model\Feuser $feuser) {
		
		$this->feuserRepository->update($feuser);
//		$this->feuserRepository->persistAll();
		
		$this->flashMessageContainer->add('Die Daten wurden aktualisiert');

//		$this->redirect('edit');
		$this->redirectToUri('myqualinet.html?active=0');		
	}

	/**
	 * action delete
	 *
	 * @param \BLSV\QualinetFeuser\Domain\Model\Feuser $feuser
	 * @return void
	 */
	public function deleteAction(\BLSV\QualinetFeuser\Domain\Model\Feuser $feuser) {
		// $this->feuserRepository->remove($feuser);
		// $this->flashMessageContainer->add('Your Feuser was removed.');
		// $this->redirect('list');
	}
}
?>