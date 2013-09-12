<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class DatenschutzValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($checkbox){

    	$this->errors = array();
		if (!$checkbox){
			$this->addError('Fehler 1378735448: Bitte bestätigen Sie die AGB, Datenschutzbestimmungen und Widerrufsbelehrung', 1378735448);
			return false;
		}
		return true;
    }
}

?>