<?php

namespace BLSV\QualinetFeuser\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Martin Gonschor <martin.gonschor@blsv.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \BLSV\QualinetFeuser\Domain\Model\Feuser.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage qualinet_feuser
 *
 * @author Martin Gonschor <martin.gonschor@blsv.de>
 */
class FeuserTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \BLSV\QualinetFeuser\Domain\Model\Feuser
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \BLSV\QualinetFeuser\Domain\Model\Feuser();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTxQualinetfeuserVereinsnummerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserVereinsnummerForStringSetsTxQualinetfeuserVereinsnummer() { 
		$this->fixture->setTxQualinetfeuserVereinsnummer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserVereinsnummer()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserUebungsleiteridReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserUebungsleiteridForStringSetsTxQualinetfeuserUebungsleiterid() { 
		$this->fixture->setTxQualinetfeuserUebungsleiterid('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserUebungsleiterid()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserKontonrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserKontonrForStringSetsTxQualinetfeuserKontonr() { 
		$this->fixture->setTxQualinetfeuserKontonr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserKontonr()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserBlzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserBlzForStringSetsTxQualinetfeuserBlz() { 
		$this->fixture->setTxQualinetfeuserBlz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserBlz()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserBanknameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserBanknameForStringSetsTxQualinetfeuserBankname() { 
		$this->fixture->setTxQualinetfeuserBankname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserBankname()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserMailsvondrittenReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserMailsvondrittenForOoleanSetsTxQualinetfeuserMailsvondritten() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserBankeinzugReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserBankeinzugForOoleanSetsTxQualinetfeuserBankeinzug() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserStrasseReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserStrasseForStringSetsTxQualinetfeuserStrasse() { 
		$this->fixture->setTxQualinetfeuserStrasse('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserStrasse()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserZusatzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserZusatzForStringSetsTxQualinetfeuserZusatz() { 
		$this->fixture->setTxQualinetfeuserZusatz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserZusatz()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserStrassearbeitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserStrassearbeitForStringSetsTxQualinetfeuserStrassearbeit() { 
		$this->fixture->setTxQualinetfeuserStrassearbeit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserStrassearbeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserGesperrtReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserGesperrtForOoleanSetsTxQualinetfeuserGesperrt() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserStadtarbeitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserStadtarbeitForStringSetsTxQualinetfeuserStadtarbeit() { 
		$this->fixture->setTxQualinetfeuserStadtarbeit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserStadtarbeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserKontaktnrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserKontaktnrForStringSetsTxQualinetfeuserKontaktnr() { 
		$this->fixture->setTxQualinetfeuserKontaktnr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserKontaktnr()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserEmail2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserEmail2ForStringSetsTxQualinetfeuserEmail2() { 
		$this->fixture->setTxQualinetfeuserEmail2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserEmail2()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserEmailarbeitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserEmailarbeitForStringSetsTxQualinetfeuserEmailarbeit() { 
		$this->fixture->setTxQualinetfeuserEmailarbeit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserEmailarbeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserBlsvmitarbeiterReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserBlsvmitarbeiterForOoleanSetsTxQualinetfeuserBlsvmitarbeiter() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserFaxarbeitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserFaxarbeitForStringSetsTxQualinetfeuserFaxarbeit() { 
		$this->fixture->setTxQualinetfeuserFaxarbeit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserFaxarbeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserMobilReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserMobilForStringSetsTxQualinetfeuserMobil() { 
		$this->fixture->setTxQualinetfeuserMobil('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserMobil()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserReferentennrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserReferentennrForStringSetsTxQualinetfeuserReferentennr() { 
		$this->fixture->setTxQualinetfeuserReferentennr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserReferentennr()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserPagerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserPagerForStringSetsTxQualinetfeuserPager() { 
		$this->fixture->setTxQualinetfeuserPager('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserPager()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserTelprivatReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserTelprivatForStringSetsTxQualinetfeuserTelprivat() { 
		$this->fixture->setTxQualinetfeuserTelprivat('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserTelprivat()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserTelarbeitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserTelarbeitForStringSetsTxQualinetfeuserTelarbeit() { 
		$this->fixture->setTxQualinetfeuserTelarbeit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserTelarbeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserPlzarbeitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserPlzarbeitForStringSetsTxQualinetfeuserPlzarbeit() { 
		$this->fixture->setTxQualinetfeuserPlzarbeit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserPlzarbeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserBeschreibungReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserBeschreibungForStringSetsTxQualinetfeuserBeschreibung() { 
		$this->fixture->setTxQualinetfeuserBeschreibung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserBeschreibung()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserRefvertragversendetReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserRefvertragversendetForOoleanSetsTxQualinetfeuserRefvertragversendet() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserBeschreibungkurzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserBeschreibungkurzForStringSetsTxQualinetfeuserBeschreibungkurz() { 
		$this->fixture->setTxQualinetfeuserBeschreibungkurz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserBeschreibungkurz()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserUmsatzsteueridReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserUmsatzsteueridForStringSetsTxQualinetfeuserUmsatzsteuerid() { 
		$this->fixture->setTxQualinetfeuserUmsatzsteuerid('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserUmsatzsteuerid()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserKreditoridReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserKreditoridForStringSetsTxQualinetfeuserKreditorid() { 
		$this->fixture->setTxQualinetfeuserKreditorid('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserKreditorid()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserDurchwahlReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserDurchwahlForStringSetsTxQualinetfeuserDurchwahl() { 
		$this->fixture->setTxQualinetfeuserDurchwahl('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserDurchwahl()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserTeilnehmeridReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserTeilnehmeridForStringSetsTxQualinetfeuserTeilnehmerid() { 
		$this->fixture->setTxQualinetfeuserTeilnehmerid('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserTeilnehmerid()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserIbanReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserIbanForStringSetsTxQualinetfeuserIban() { 
		$this->fixture->setTxQualinetfeuserIban('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserIban()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserSwiftReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserSwiftForStringSetsTxQualinetfeuserSwift() { 
		$this->fixture->setTxQualinetfeuserSwift('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTxQualinetfeuserSwift()
		);
	}
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserBlsvwerbungReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserBlsvwerbungForOoleanSetsTxQualinetfeuserBlsvwerbung() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserEhrenamtReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserEhrenamtForOoleanSetsTxQualinetfeuserEhrenamt() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserHauptamtReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserHauptamtForOoleanSetsTxQualinetfeuserHauptamt() { }
	
	/**
	 * @test
	 */
	public function getTxQualinetfeuserDatenschutzReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTxQualinetfeuserDatenschutzForOoleanSetsTxQualinetfeuserDatenschutz() { }
	
	/**
	 * @test
	 */
	public function getUsernameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setUsernameForStringSetsUsername() { 
		$this->fixture->setUsername('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getUsername()
		);
	}
	
	/**
	 * @test
	 */
	public function getGenderReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGender()
		);
	}

	/**
	 * @test
	 */
	public function setGenderForIntegerSetsGender() { 
		$this->fixture->setGender(12);

		$this->assertSame(
			12,
			$this->fixture->getGender()
		);
	}
	
	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() { 
		$this->fixture->setFirstName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstName()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() { 
		$this->fixture->setLastName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastName()
		);
	}
	
	/**
	 * @test
	 */
	public function getDayOfBirthReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDayOfBirthForDateTimeSetsDayOfBirth() { }
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() { 
		$this->fixture->setAddress('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAddress()
		);
	}
	
	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() { 
		$this->fixture->setCity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCity()
		);
	}
	
	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setZipForStringSetsZip() { 
		$this->fixture->setZip('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getZip()
		);
	}
	
	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone() { 
		$this->fixture->setTelephone('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTelephone()
		);
	}
	
	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax() { 
		$this->fixture->setFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCountryForStringSetsCountry() { 
		$this->fixture->setCountry('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCountry()
		);
	}
	
	/**
	 * @test
	 */
	public function getCompanyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCompanyForStringSetsCountry() { 
		$this->fixture->setCompany('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCompany()
		);
	}

	/**
	 * @test
	 */
	public function getWwwReturnsInitialValueForString() { }
	
	/**
	 * @test
	 */
	public function setWwwForStringSetsWww() {
		$this->fixture->setWww('Conceived at T3CON10');
	
		$this->assertSame(
				'Conceived at T3CON10',
				$this->fixture->getWww()
		);
	}

	/**
	 * @test
	 */
	public function getUstidbenReturnsInitialValueForBoolean() { }
	
	/**
	 * @test
	 */
	public function setUstidbenForBooleanSetsUstidben() {
		$this->fixture->setUstidben(true);
	
		$this->assertSame(
				true,
				$this->fixture->getUstidben()
		);
	}

	/**
	 * @test
	 */
	public function getUstidReturnsInitialValueForString() { }
	
	/**
	 * @test
	 */
	public function setUstidForStringSetsUstid() {
		$this->fixture->setUstid('Conceived at T3CON10');
	
		$this->assertSame(
				'Conceived at T3CON10',
				$this->fixture->getUstid()
		);
	}

	/**
	 * @test
	 */
	public function getFreigabefahrgemeinschaftReturnsInitialValueForOolean() { }
	
	/**
	 * @test
	 */
	public function setFreigabefahrgemeinschaftForOoleanSetsFreigabefahrgemeinschaft() { }
	
	/**
	 * @test
	 */
	public function getZustimmungagbReturnsInitialValueForString() { }
	
	/**
	 * @test
	 */
	public function setZustimmungagbForStringSetsZustimmungagb() {
		$this->fixture->setZustimmungagb('Conceived at T3CON10');
	
		$this->assertSame(
				'Conceived at T3CON10',
				$this->fixture->getZustimmungagb()
		);
	}
	
	/**
	 * @test
	 */
	public function getPassbildReturnsInitialValueForString() { }
	
	/**
	 * @test
	 */
	public function setPassbildForStringSetsPassbild() {
		$this->fixture->setPassbild('Conceived at T3CON10');
	
		$this->assertSame(
				'Conceived at T3CON10',
				$this->fixture->getPassbild()
		);
	}
	
	/**
	 * @test
	 */
	public function getCheckrichtigkeitReturnsInitialValueForString() { }
	
	/**
	 * @test
	 */
	public function setCheckrichtigkeitForStringSetsCheckrichtigkeit() {
		$this->fixture->setCheckrichtigkeit('Conceived at T3CON10');
	
		$this->assertSame(
				'Conceived at T3CON10',
				$this->fixture->getCheckrichtigkeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getDatumrichtigkeitReturnsInitialValueForDateTime() { }
	
	/**
	 * @test
	 */
	public function setDatumrichtigkeitForDateTimeSetsDatumrichtigkeit() { }
	
}
?>