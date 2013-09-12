<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class UsernameValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($username){
    	$this->errors = array();
    	$feuserRepository = new \BLSV\QualinetFeuser\Domain\Repository\FeuserRepository();
    	$feuser = $feuserRepository->findOneByUsername($username);
    	if ($feuser && ($feuser->getUid()<>$GLOBALS['TSFE']->fe_user->user['uid'])){
    		$this->addError('Fehler 1378735446: Der Benutzername ist bereits vergeben. Bitte geben Sie einen anderen Benutzernamen an', 1378735446);
    		return false;
    	}
		return true;
    }
}
?>