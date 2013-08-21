<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class FeuserValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
	
    public function isValid($feuser){

    	
    	echo '<pre>';
    	print_r($feuser);
    	exit;

    	
    	$this->errors = array();
    	/*
		if (!$feuser){
			$this->addError('...', time());
			return false;
		}
		*/
    	
		return true;
    }
}

?>