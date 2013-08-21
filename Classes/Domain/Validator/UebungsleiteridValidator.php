<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class UebungsleiteridValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($uebungsleiterid){
    	$this->errors = array();
   		if (!preg_match('/^([0-9]*)?$/', $uebungsleiterid, $m)){
			$this->addError('Bitte geben Sie eine gültige Übungsleiternummer an', time());
			return false;
    	}
		return true;
    }
}

?>