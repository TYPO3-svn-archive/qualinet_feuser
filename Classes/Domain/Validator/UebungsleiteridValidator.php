<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class UebungsleiteridValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($uebungsleiterid){
    	$this->errors = array();
   		if (!is_numeric($uebungsleiterid) || ($uebungsleiterid<2)) {
			$this->addError('Fehler 1378735447: Bitte geben Sie eine gültige Übungsleiternummer an', 1378735447);
			return false;
    	}
		return true;
    }
}
?>