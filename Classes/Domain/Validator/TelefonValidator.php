<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class TelefonValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($telefon){
    	$this->errors = array();
    	 
		if ($telefon!=''){
    		$regEx = \BLSV\QualinetFeuser\Domain\Model\Feuser::getTelefonPattern();
			if (!preg_match("/$regEx/", $telefon, $m)){
	    		$this->addError('Fehler 1383043295: Bitte geben Sie eine gültige Telefonnummer an', 1383043295);
				return false;
	    	}
		}
		return true;
    }
}
?>