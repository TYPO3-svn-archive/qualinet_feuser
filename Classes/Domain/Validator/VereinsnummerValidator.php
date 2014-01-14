<?php
namespace BLSV\QualinetFeuser\Domain\Validator;

class VereinsnummerValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {


	/**
	 * stammdatenRepository
	 *
	 * @var \BLSV\Blsvbestammdaten\Domain\Repository\StammdatenRepository
	 * @inject
	 */
	protected $stammdatenRepository;
	
	/**
	 * @param   $stammdatenRepository
	 * @return void
	 */
	public function injectStammdatenRepository( \BLSV\Blsvbestammdaten\Domain\Repository\StammdatenRepository $stammdatenRepository )
	{
		$this->stammdatenRepository = $stammdatenRepository;
		
	}
	
	
    public function isValid( $vereinsnummer ){
    	$this->errors = array();    	
    	
    	$regEx = \BLSV\QualinetFeuser\Domain\Model\Feuser::getTxQualinetfeuserVereinsnummerPattern();
    	if ( $vereinsnummer!='' ){
	   		if (!preg_match("/$regEx/", $vereinsnummer, $m)){
	   			
	   			$this->addError('Fehler 1378735445: Bitte geben Sie eine gültige Vereinsnummer an', 1378735445);
	   			return false;
	   		}else{
	   			
	   			$stammdaten = $this->stammdatenRepository->findByUid($vereinsnummer);
	   			if ( !$stammdaten ) {
	   				$this->addError('Fehler 1378735445: Bitte geben Sie eine gültige Vereinsnummer an', 1378735445);
	   				return FALSE;
	   			}
	   			
	   		}
    	}
		return true;
    }
}
?>