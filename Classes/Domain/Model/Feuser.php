<?php
namespace BLSV\QualinetFeuser\Domain\Model;

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
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package qualinet_feuser
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Feuser extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {

	/**
	 * Vereinsnummer
	 *
	 * @var \string
	 * @validate BLSV\QualinetFeuser\Domain\Validator\VereinsnummerValidator
	 */
	protected $txQualinetfeuserVereinsnummer;

	/**
	 * Übungsleiterid
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserUebungsleiterid;

	/**
	 * Kontonummer
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserKontonr;

	/**
	 * Bankleitzahl
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserBlz;

	/**
	 * Bankname
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserBankname;

	/**
	 * Mails von Dritten
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserMailsvondritten = FALSE;

	/**
	 * Bankeinzug
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserBankeinzug = FALSE;

	/**
	 * Straße
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserStrasse;

	/**
	 * Zusatz
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserZusatz;

	/**
	 * Straße Arbeit
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserStrassearbeit;

	/**
	 * gesperrt
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserGesperrt = FALSE;

	/**
	 * Stadt Arbeit
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserStadtarbeit;

	/**
	 * Kontakt Nr.
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserKontaktnr;

	/**
	 * EMail 2
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserEmail2;

	/**
	 * EMail Arbeit
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserEmailarbeit;

	/**
	 * BLSV Mitarbeiter
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserBlsvmitarbeiter = FALSE;

	/**
	 * Fax Arbeit
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserFaxarbeit;

	/**
	 * Mobil
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserMobil;

	/**
	 * Referenten Nr.
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserReferentennr;

	/**
	 * Pager
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserPager;

	/**
	 * Telefon Privat
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserTelprivat;

	/**
	 * Telefon Arbeit
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserTelarbeit;

	/**
	 * PLZ Arbeit
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserPlzarbeit;

	/**
	 * Beschreibung
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserBeschreibung;

	/**
	 * Referent Vertrag versendet
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserRefvertragversendet = FALSE;

	/**
	 * Beschreibung kurz
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserBeschreibungkurz;

	/**
	 * Umsatzsteuer Id
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserUmsatzsteuerid;

	/**
	 * Kreditor Id
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserKreditorid;

	/**
	 * Durchwahl
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserDurchwahl;

	/**
	 * Teilnehmer Id
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserTeilnehmerid;

	/**
	 * IBAN
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserIban;

	/**
	 * Swift
	 *
	 * @var \string
	 */
	protected $txQualinetfeuserSwift;

	/**
	 * BLSV Werbung
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserBlsvwerbung = FALSE;

	/**
	 * Ehrenamt
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserEhrenamt = FALSE;

	/**
	 * Hauptamt
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserHauptamt = FALSE;

	/**
	 * Datenschutz
	 *
	 * @var boolean
	 */
	protected $txQualinetfeuserDatenschutz = FALSE;

	/**
	 * Benutzername
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $username;

	/**
	 * Anrede
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $gender;

	/**
	 * Vorname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $firstName;

	/**
	 * Nachname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $lastName;

	/**
	 * Geburtstag
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $dateOfBirth;

	/**
	 * E-Mail
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $email;

	/**
	 * Addresse
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $address;

	/**
	 * Ort
	 *
	 * @var \string
	 */
	protected $city;

	/**
	 * Postleitzahl
	 *
	 * @var \string
	 */
	protected $zip;

	/**
	 * Telefon
	 *
	 * @var \string
	 */
	protected $telephone;

	/**
	 * Fax
	 *
	 * @var \string
	 */
	protected $fax;

	/**
	 * Titel
	 *
	 * @var \string
	 */
	protected $title;

	/**
	 * Länder-/Regionscode
	 *
	 * @var \string
	 */
	protected $country;

	/**
	 * Returns the txQualinetfeuserVereinsnummer
	 *
	 * @return \string $txQualinetfeuserVereinsnummer
	 */
	public function getTxQualinetfeuserVereinsnummer() {
		return $this->txQualinetfeuserVereinsnummer;
	}

	/**
	 * Sets the txQualinetfeuserVereinsnummer
	 *
	 * @param \string $txQualinetfeuserVereinsnummer
	 * @return void
	 */
	public function setTxQualinetfeuserVereinsnummer($txQualinetfeuserVereinsnummer) {
		$this->txQualinetfeuserVereinsnummer = $txQualinetfeuserVereinsnummer;
	}

	/**
	 * Returns the txQualinetfeuserUebungsleiterid
	 *
	 * @return \string $txQualinetfeuserUebungsleiterid
	 */
	public function getTxQualinetfeuserUebungsleiterid() {
		return $this->txQualinetfeuserUebungsleiterid;
	}

	/**
	 * Sets the txQualinetfeuserUebungsleiterid
	 *
	 * @param \string $txQualinetfeuserUebungsleiterid
	 * @return void
	 */
	public function setTxQualinetfeuserUebungsleiterid($txQualinetfeuserUebungsleiterid) {
		$this->txQualinetfeuserUebungsleiterid = $txQualinetfeuserUebungsleiterid;
	}

	/**
	 * Returns the txQualinetfeuserKontonr
	 *
	 * @return \string $txQualinetfeuserKontonr
	 */
	public function getTxQualinetfeuserKontonr() {
		return $this->txQualinetfeuserKontonr;
	}

	/**
	 * Sets the txQualinetfeuserKontonr
	 *
	 * @param \string $txQualinetfeuserKontonr
	 * @return void
	 */
	public function setTxQualinetfeuserKontonr($txQualinetfeuserKontonr) {
		$this->txQualinetfeuserKontonr = $txQualinetfeuserKontonr;
	}

	/**
	 * Returns the txQualinetfeuserBlz
	 *
	 * @return \string $txQualinetfeuserBlz
	 */
	public function getTxQualinetfeuserBlz() {
		return $this->txQualinetfeuserBlz;
	}

	/**
	 * Sets the txQualinetfeuserBlz
	 *
	 * @param \string $txQualinetfeuserBlz
	 * @return void
	 */
	public function setTxQualinetfeuserBlz($txQualinetfeuserBlz) {
		$this->txQualinetfeuserBlz = $txQualinetfeuserBlz;
	}

	/**
	 * Returns the txQualinetfeuserBankname
	 *
	 * @return \string $txQualinetfeuserBankname
	 */
	public function getTxQualinetfeuserBankname() {
		return $this->txQualinetfeuserBankname;
	}

	/**
	 * Sets the txQualinetfeuserBankname
	 *
	 * @param \string $txQualinetfeuserBankname
	 * @return void
	 */
	public function setTxQualinetfeuserBankname($txQualinetfeuserBankname) {
		$this->txQualinetfeuserBankname = $txQualinetfeuserBankname;
	}

	/**
	 * Returns the txQualinetfeuserMailsvondritten
	 *
	 * @return boolean $txQualinetfeuserMailsvondritten
	 */
	public function getTxQualinetfeuserMailsvondritten() {
		return $this->txQualinetfeuserMailsvondritten;
	}

	/**
	 * Sets the txQualinetfeuserMailsvondritten
	 *
	 * @param boolean $txQualinetfeuserMailsvondritten
	 * @return void
	 */
	public function setTxQualinetfeuserMailsvondritten($txQualinetfeuserMailsvondritten) {
		$this->txQualinetfeuserMailsvondritten = $txQualinetfeuserMailsvondritten;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserMailsvondritten
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserMailsvondritten() {
		return $this->getTxQualinetfeuserMailsvondritten();
	}

	/**
	 * Returns the txQualinetfeuserBankeinzug
	 *
	 * @return boolean $txQualinetfeuserBankeinzug
	 */
	public function getTxQualinetfeuserBankeinzug() {
		return $this->txQualinetfeuserBankeinzug;
	}

	/**
	 * Sets the txQualinetfeuserBankeinzug
	 *
	 * @param boolean $txQualinetfeuserBankeinzug
	 * @return void
	 */
	public function setTxQualinetfeuserBankeinzug($txQualinetfeuserBankeinzug) {
		$this->txQualinetfeuserBankeinzug = $txQualinetfeuserBankeinzug;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserBankeinzug
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserBankeinzug() {
		return $this->getTxQualinetfeuserBankeinzug();
	}

	/**
	 * Returns the txQualinetfeuserStrasse
	 *
	 * @return \string $txQualinetfeuserStrasse
	 */
	public function getTxQualinetfeuserStrasse() {
		return $this->txQualinetfeuserStrasse;
	}

	/**
	 * Sets the txQualinetfeuserStrasse
	 *
	 * @param \string $txQualinetfeuserStrasse
	 * @return void
	 */
	public function setTxQualinetfeuserStrasse($txQualinetfeuserStrasse) {
		$this->txQualinetfeuserStrasse = $txQualinetfeuserStrasse;
	}

	/**
	 * Returns the txQualinetfeuserZusatz
	 *
	 * @return \string $txQualinetfeuserZusatz
	 */
	public function getTxQualinetfeuserZusatz() {
		return $this->txQualinetfeuserZusatz;
	}

	/**
	 * Sets the txQualinetfeuserZusatz
	 *
	 * @param \string $txQualinetfeuserZusatz
	 * @return void
	 */
	public function setTxQualinetfeuserZusatz($txQualinetfeuserZusatz) {
		$this->txQualinetfeuserZusatz = $txQualinetfeuserZusatz;
	}

	/**
	 * Returns the txQualinetfeuserStrassearbeit
	 *
	 * @return \string $txQualinetfeuserStrassearbeit
	 */
	public function getTxQualinetfeuserStrassearbeit() {
		return $this->txQualinetfeuserStrassearbeit;
	}

	/**
	 * Sets the txQualinetfeuserStrassearbeit
	 *
	 * @param \string $txQualinetfeuserStrassearbeit
	 * @return void
	 */
	public function setTxQualinetfeuserStrassearbeit($txQualinetfeuserStrassearbeit) {
		$this->txQualinetfeuserStrassearbeit = $txQualinetfeuserStrassearbeit;
	}

	/**
	 * Returns the txQualinetfeuserGesperrt
	 *
	 * @return boolean $txQualinetfeuserGesperrt
	 */
	public function getTxQualinetfeuserGesperrt() {
		return $this->txQualinetfeuserGesperrt;
	}

	/**
	 * Sets the txQualinetfeuserGesperrt
	 *
	 * @param boolean $txQualinetfeuserGesperrt
	 * @return void
	 */
	public function setTxQualinetfeuserGesperrt($txQualinetfeuserGesperrt) {
		$this->txQualinetfeuserGesperrt = $txQualinetfeuserGesperrt;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserGesperrt
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserGesperrt() {
		return $this->getTxQualinetfeuserGesperrt();
	}

	/**
	 * Returns the txQualinetfeuserStadtarbeit
	 *
	 * @return \string $txQualinetfeuserStadtarbeit
	 */
	public function getTxQualinetfeuserStadtarbeit() {
		return $this->txQualinetfeuserStadtarbeit;
	}

	/**
	 * Sets the txQualinetfeuserStadtarbeit
	 *
	 * @param \string $txQualinetfeuserStadtarbeit
	 * @return void
	 */
	public function setTxQualinetfeuserStadtarbeit($txQualinetfeuserStadtarbeit) {
		$this->txQualinetfeuserStadtarbeit = $txQualinetfeuserStadtarbeit;
	}

	/**
	 * Returns the txQualinetfeuserKontaktnr
	 *
	 * @return \string $txQualinetfeuserKontaktnr
	 */
	public function getTxQualinetfeuserKontaktnr() {
		return $this->txQualinetfeuserKontaktnr;
	}

	/**
	 * Sets the txQualinetfeuserKontaktnr
	 *
	 * @param \string $txQualinetfeuserKontaktnr
	 * @return void
	 */
	public function setTxQualinetfeuserKontaktnr($txQualinetfeuserKontaktnr) {
		$this->txQualinetfeuserKontaktnr = $txQualinetfeuserKontaktnr;
	}

	/**
	 * Returns the txQualinetfeuserEmail2
	 *
	 * @return \string $txQualinetfeuserEmail2
	 */
	public function getTxQualinetfeuserEmail2() {
		return $this->txQualinetfeuserEmail2;
	}

	/**
	 * Sets the txQualinetfeuserEmail2
	 *
	 * @param \string $txQualinetfeuserEmail2
	 * @return void
	 */
	public function setTxQualinetfeuserEmail2($txQualinetfeuserEmail2) {
		$this->txQualinetfeuserEmail2 = $txQualinetfeuserEmail2;
	}

	/**
	 * Returns the txQualinetfeuserEmailarbeit
	 *
	 * @return \string $txQualinetfeuserEmailarbeit
	 */
	public function getTxQualinetfeuserEmailarbeit() {
		return $this->txQualinetfeuserEmailarbeit;
	}

	/**
	 * Sets the txQualinetfeuserEmailarbeit
	 *
	 * @param \string $txQualinetfeuserEmailarbeit
	 * @return void
	 */
	public function setTxQualinetfeuserEmailarbeit($txQualinetfeuserEmailarbeit) {
		$this->txQualinetfeuserEmailarbeit = $txQualinetfeuserEmailarbeit;
	}

	/**
	 * Returns the txQualinetfeuserBlsvmitarbeiter
	 *
	 * @return boolean $txQualinetfeuserBlsvmitarbeiter
	 */
	public function getTxQualinetfeuserBlsvmitarbeiter() {
		return $this->txQualinetfeuserBlsvmitarbeiter;
	}

	/**
	 * Sets the txQualinetfeuserBlsvmitarbeiter
	 *
	 * @param boolean $txQualinetfeuserBlsvmitarbeiter
	 * @return void
	 */
	public function setTxQualinetfeuserBlsvmitarbeiter($txQualinetfeuserBlsvmitarbeiter) {
		$this->txQualinetfeuserBlsvmitarbeiter = $txQualinetfeuserBlsvmitarbeiter;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserBlsvmitarbeiter
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserBlsvmitarbeiter() {
		return $this->getTxQualinetfeuserBlsvmitarbeiter();
	}

	/**
	 * Returns the txQualinetfeuserFaxarbeit
	 *
	 * @return \string $txQualinetfeuserFaxarbeit
	 */
	public function getTxQualinetfeuserFaxarbeit() {
		return $this->txQualinetfeuserFaxarbeit;
	}

	/**
	 * Sets the txQualinetfeuserFaxarbeit
	 *
	 * @param \string $txQualinetfeuserFaxarbeit
	 * @return void
	 */
	public function setTxQualinetfeuserFaxarbeit($txQualinetfeuserFaxarbeit) {
		$this->txQualinetfeuserFaxarbeit = $txQualinetfeuserFaxarbeit;
	}

	/**
	 * Returns the txQualinetfeuserMobil
	 *
	 * @return \string $txQualinetfeuserMobil
	 */
	public function getTxQualinetfeuserMobil() {
		return $this->txQualinetfeuserMobil;
	}

	/**
	 * Sets the txQualinetfeuserMobil
	 *
	 * @param \string $txQualinetfeuserMobil
	 * @return void
	 */
	public function setTxQualinetfeuserMobil($txQualinetfeuserMobil) {
		$this->txQualinetfeuserMobil = $txQualinetfeuserMobil;
	}

	/**
	 * Returns the txQualinetfeuserReferentennr
	 *
	 * @return \string $txQualinetfeuserReferentennr
	 */
	public function getTxQualinetfeuserReferentennr() {
		return $this->txQualinetfeuserReferentennr;
	}

	/**
	 * Sets the txQualinetfeuserReferentennr
	 *
	 * @param \string $txQualinetfeuserReferentennr
	 * @return void
	 */
	public function setTxQualinetfeuserReferentennr($txQualinetfeuserReferentennr) {
		$this->txQualinetfeuserReferentennr = $txQualinetfeuserReferentennr;
	}

	/**
	 * Returns the txQualinetfeuserPager
	 *
	 * @return \string $txQualinetfeuserPager
	 */
	public function getTxQualinetfeuserPager() {
		return $this->txQualinetfeuserPager;
	}

	/**
	 * Sets the txQualinetfeuserPager
	 *
	 * @param \string $txQualinetfeuserPager
	 * @return void
	 */
	public function setTxQualinetfeuserPager($txQualinetfeuserPager) {
		$this->txQualinetfeuserPager = $txQualinetfeuserPager;
	}

	/**
	 * Returns the txQualinetfeuserTelprivat
	 *
	 * @return \string $txQualinetfeuserTelprivat
	 */
	public function getTxQualinetfeuserTelprivat() {
		return $this->txQualinetfeuserTelprivat;
	}

	/**
	 * Sets the txQualinetfeuserTelprivat
	 *
	 * @param \string $txQualinetfeuserTelprivat
	 * @return void
	 */
	public function setTxQualinetfeuserTelprivat($txQualinetfeuserTelprivat) {
		$this->txQualinetfeuserTelprivat = $txQualinetfeuserTelprivat;
	}

	/**
	 * Returns the txQualinetfeuserTelarbeit
	 *
	 * @return \string $txQualinetfeuserTelarbeit
	 */
	public function getTxQualinetfeuserTelarbeit() {
		return $this->txQualinetfeuserTelarbeit;
	}

	/**
	 * Sets the txQualinetfeuserTelarbeit
	 *
	 * @param \string $txQualinetfeuserTelarbeit
	 * @return void
	 */
	public function setTxQualinetfeuserTelarbeit($txQualinetfeuserTelarbeit) {
		$this->txQualinetfeuserTelarbeit = $txQualinetfeuserTelarbeit;
	}

	/**
	 * Returns the txQualinetfeuserPlzarbeit
	 *
	 * @return \string $txQualinetfeuserPlzarbeit
	 */
	public function getTxQualinetfeuserPlzarbeit() {
		return $this->txQualinetfeuserPlzarbeit;
	}

	/**
	 * Sets the txQualinetfeuserPlzarbeit
	 *
	 * @param \string $txQualinetfeuserPlzarbeit
	 * @return void
	 */
	public function setTxQualinetfeuserPlzarbeit($txQualinetfeuserPlzarbeit) {
		$this->txQualinetfeuserPlzarbeit = $txQualinetfeuserPlzarbeit;
	}

	/**
	 * Returns the txQualinetfeuserBeschreibung
	 *
	 * @return \string $txQualinetfeuserBeschreibung
	 */
	public function getTxQualinetfeuserBeschreibung() {
		return $this->txQualinetfeuserBeschreibung;
	}

	/**
	 * Sets the txQualinetfeuserBeschreibung
	 *
	 * @param \string $txQualinetfeuserBeschreibung
	 * @return void
	 */
	public function setTxQualinetfeuserBeschreibung($txQualinetfeuserBeschreibung) {
		$this->txQualinetfeuserBeschreibung = $txQualinetfeuserBeschreibung;
	}

	/**
	 * Returns the txQualinetfeuserRefvertragversendet
	 *
	 * @return boolean $txQualinetfeuserRefvertragversendet
	 */
	public function getTxQualinetfeuserRefvertragversendet() {
		return $this->txQualinetfeuserRefvertragversendet;
	}

	/**
	 * Sets the txQualinetfeuserRefvertragversendet
	 *
	 * @param boolean $txQualinetfeuserRefvertragversendet
	 * @return void
	 */
	public function setTxQualinetfeuserRefvertragversendet($txQualinetfeuserRefvertragversendet) {
		$this->txQualinetfeuserRefvertragversendet = $txQualinetfeuserRefvertragversendet;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserRefvertragversendet
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserRefvertragversendet() {
		return $this->getTxQualinetfeuserRefvertragversendet();
	}

	/**
	 * Returns the txQualinetfeuserBeschreibungkurz
	 *
	 * @return \string $txQualinetfeuserBeschreibungkurz
	 */
	public function getTxQualinetfeuserBeschreibungkurz() {
		return $this->txQualinetfeuserBeschreibungkurz;
	}

	/**
	 * Sets the txQualinetfeuserBeschreibungkurz
	 *
	 * @param \string $txQualinetfeuserBeschreibungkurz
	 * @return void
	 */
	public function setTxQualinetfeuserBeschreibungkurz($txQualinetfeuserBeschreibungkurz) {
		$this->txQualinetfeuserBeschreibungkurz = $txQualinetfeuserBeschreibungkurz;
	}

	/**
	 * Returns the txQualinetfeuserUmsatzsteuerid
	 *
	 * @return \string $txQualinetfeuserUmsatzsteuerid
	 */
	public function getTxQualinetfeuserUmsatzsteuerid() {
		return $this->txQualinetfeuserUmsatzsteuerid;
	}

	/**
	 * Sets the txQualinetfeuserUmsatzsteuerid
	 *
	 * @param \string $txQualinetfeuserUmsatzsteuerid
	 * @return void
	 */
	public function setTxQualinetfeuserUmsatzsteuerid($txQualinetfeuserUmsatzsteuerid) {
		$this->txQualinetfeuserUmsatzsteuerid = $txQualinetfeuserUmsatzsteuerid;
	}

	/**
	 * Returns the txQualinetfeuserKreditorid
	 *
	 * @return \string $txQualinetfeuserKreditorid
	 */
	public function getTxQualinetfeuserKreditorid() {
		return $this->txQualinetfeuserKreditorid;
	}

	/**
	 * Sets the txQualinetfeuserKreditorid
	 *
	 * @param \string $txQualinetfeuserKreditorid
	 * @return void
	 */
	public function setTxQualinetfeuserKreditorid($txQualinetfeuserKreditorid) {
		$this->txQualinetfeuserKreditorid = $txQualinetfeuserKreditorid;
	}

	/**
	 * Returns the txQualinetfeuserDurchwahl
	 *
	 * @return \string $txQualinetfeuserDurchwahl
	 */
	public function getTxQualinetfeuserDurchwahl() {
		return $this->txQualinetfeuserDurchwahl;
	}

	/**
	 * Sets the txQualinetfeuserDurchwahl
	 *
	 * @param \string $txQualinetfeuserDurchwahl
	 * @return void
	 */
	public function setTxQualinetfeuserDurchwahl($txQualinetfeuserDurchwahl) {
		$this->txQualinetfeuserDurchwahl = $txQualinetfeuserDurchwahl;
	}

	/**
	 * Returns the txQualinetfeuserTeilnehmerid
	 *
	 * @return \string $txQualinetfeuserTeilnehmerid
	 */
	public function getTxQualinetfeuserTeilnehmerid() {
		return $this->txQualinetfeuserTeilnehmerid;
	}

	/**
	 * Sets the txQualinetfeuserTeilnehmerid
	 *
	 * @param \string $txQualinetfeuserTeilnehmerid
	 * @return void
	 */
	public function setTxQualinetfeuserTeilnehmerid($txQualinetfeuserTeilnehmerid) {
		$this->txQualinetfeuserTeilnehmerid = $txQualinetfeuserTeilnehmerid;
	}

	/**
	 * Returns the txQualinetfeuserIban
	 *
	 * @return \string $txQualinetfeuserIban
	 */
	public function getTxQualinetfeuserIban() {
		return $this->txQualinetfeuserIban;
	}

	/**
	 * Sets the txQualinetfeuserIban
	 *
	 * @param \string $txQualinetfeuserIban
	 * @return void
	 */
	public function setTxQualinetfeuserIban($txQualinetfeuserIban) {
		$this->txQualinetfeuserIban = $txQualinetfeuserIban;
	}

	/**
	 * Returns the txQualinetfeuserSwift
	 *
	 * @return \string $txQualinetfeuserSwift
	 */
	public function getTxQualinetfeuserSwift() {
		return $this->txQualinetfeuserSwift;
	}

	/**
	 * Sets the txQualinetfeuserSwift
	 *
	 * @param \string $txQualinetfeuserSwift
	 * @return void
	 */
	public function setTxQualinetfeuserSwift($txQualinetfeuserSwift) {
		$this->txQualinetfeuserSwift = $txQualinetfeuserSwift;
	}

	/**
	 * Returns the txQualinetfeuserBlsvwerbung
	 *
	 * @return boolean $txQualinetfeuserBlsvwerbung
	 */
	public function getTxQualinetfeuserBlsvwerbung() {
		return $this->txQualinetfeuserBlsvwerbung;
	}

	/**
	 * Sets the txQualinetfeuserBlsvwerbung
	 *
	 * @param boolean $txQualinetfeuserBlsvwerbung
	 * @return void
	 */
	public function setTxQualinetfeuserBlsvwerbung($txQualinetfeuserBlsvwerbung) {
		$this->txQualinetfeuserBlsvwerbung = $txQualinetfeuserBlsvwerbung;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserBlsvwerbung
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserBlsvwerbung() {
		return $this->getTxQualinetfeuserBlsvwerbung();
	}

	/**
	 * Returns the txQualinetfeuserEhrenamt
	 *
	 * @return boolean $txQualinetfeuserEhrenamt
	 */
	public function getTxQualinetfeuserEhrenamt() {
		return $this->txQualinetfeuserEhrenamt;
	}

	/**
	 * Sets the txQualinetfeuserEhrenamt
	 *
	 * @param boolean $txQualinetfeuserEhrenamt
	 * @return void
	 */
	public function setTxQualinetfeuserEhrenamt($txQualinetfeuserEhrenamt) {
		$this->txQualinetfeuserEhrenamt = $txQualinetfeuserEhrenamt;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserEhrenamt
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserEhrenamt() {
		return $this->getTxQualinetfeuserEhrenamt();
	}

	/**
	 * Returns the txQualinetfeuserHauptamt
	 *
	 * @return boolean $txQualinetfeuserHauptamt
	 */
	public function getTxQualinetfeuserHauptamt() {
		return $this->txQualinetfeuserHauptamt;
	}

	/**
	 * Sets the txQualinetfeuserHauptamt
	 *
	 * @param boolean $txQualinetfeuserHauptamt
	 * @return void
	 */
	public function setTxQualinetfeuserHauptamt($txQualinetfeuserHauptamt) {
		$this->txQualinetfeuserHauptamt = $txQualinetfeuserHauptamt;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserHauptamt
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserHauptamt() {
		return $this->getTxQualinetfeuserHauptamt();
	}

	/**
	 * Returns the txQualinetfeuserDatenschutz
	 *
	 * @return boolean $txQualinetfeuserDatenschutz
	 */
	public function getTxQualinetfeuserDatenschutz() {
		return $this->txQualinetfeuserDatenschutz;
	}

	/**
	 * Sets the txQualinetfeuserDatenschutz
	 *
	 * @param boolean $txQualinetfeuserDatenschutz
	 * @return void
	 */
	public function setTxQualinetfeuserDatenschutz($txQualinetfeuserDatenschutz) {
		$this->txQualinetfeuserDatenschutz = $txQualinetfeuserDatenschutz;
	}

	/**
	 * Returns the boolean state of txQualinetfeuserDatenschutz
	 *
	 * @return boolean
	 */
	public function isTxQualinetfeuserDatenschutz() {
		return $this->getTxQualinetfeuserDatenschutz();
	}

	/**
	 * Returns the username
	 *
	 * @return \string $username
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Sets the username
	 *
	 * @param \string $username
	 * @return void
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * Returns the gender
	 *
	 * @return \integer $gender
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Sets the gender
	 *
	 * @param \integer $gender
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Returns the firstName
	 *
	 * @return \string $firstName
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Sets the firstName
	 *
	 * @param \string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Returns the lastName
	 *
	 * @return \string $lastName
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the lastName
	 *
	 * @param \string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Returns the dateOfBirth
	 *
	 * @return \DateTime $dateOfBirth
	 */
	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	/**
	 * Sets the dateOfBirth
	 *
	 * @param \DateTime $dateOfBirth
	 * @return void
	 */
	public function setDateOfBirth($dateOfBirth) {
		$this->dateOfBirth = $dateOfBirth;
	}

	/**
	 * Returns the email
	 *
	 * @return \string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param \string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the address
	 *
	 * @return \string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param \string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the city
	 *
	 * @return \string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 *
	 * @param \string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Returns the zip
	 *
	 * @return \string $zip
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the zip
	 *
	 * @param \string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Returns the telephone
	 *
	 * @return \string $telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Sets the telephone
	 *
	 * @param \string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * Returns the fax
	 *
	 * @return \string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 *
	 * @param \string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the country
	 *
	 * @return \string $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 *
	 * @param \string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

}
?>