<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class VereinsnummerValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($vereinsnummer){

    	$this->errors = array();

    	$regEx = \BLSV\QualinetFeuser\Domain\Model\Feuser::getTxQualinetfeuserVereinsnummerPattern();
   		if (!preg_match("/$regEx/", $vereinsnummer, $m)){
   			$this->addError('Fehler 1378735445: Bitte geben Sie eine gültige Vereinsnummer an', 1378735445);
   			return false;
   		}
    	
		return true;
    }
}
?>