<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class DatenschutzValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($checkbox){

    	$this->errors = array();
		if (!$checkbox){
			$this->addError('Bitte bestätigen Sie die AGB, Datenschutzbestimmungen und Widerrufsbelehrung', time());
			return false;
		}
		return true;
    }
}

?>