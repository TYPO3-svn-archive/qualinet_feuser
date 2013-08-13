<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class VereinsnummerValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($vereinsnummer){

    	$this->errors = array();
    	 
		if (!$vereinsnummer){
			$this->addError('die Vereinsnummer darf nicht leer sein.', 40213131);
			return false;
		}
		return true;
    }
}

?>