<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class VereinsnummerValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($vereinsnummer){

    	$this->errors = array();
    	 
   		if (!preg_match('/^([1-7][0-9]{4})?$/', $vereinsnummer, $m)){
   			$this->addError('Bitte geben Sie eine gültige Vereinsnummer an', time());
   			return false;
   		}
    	
		return true;
    }
}
?>