<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Qualinet Stammdaten verwalten'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'qualinet_feuser');

$tmp_qualinet_feuser_columns = array(

	'tx_qualinetfeuser_vereinsnummer' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_vereinsnummer',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_uebungsleiterid' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_uebungsleiterid',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_kontonr' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_kontonr',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_blz' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_blz',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_bankname' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_bankname',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_mailsvondritten' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_mailsvondritten',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_bankeinzug' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_bankeinzug',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_strasse' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_strasse',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_zusatz' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_zusatz',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_strassearbeit' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_strassearbeit',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_gesperrt' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_gesperrt',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_stadtarbeit' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_stadtarbeit',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_kontaktnr' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_kontaktnr',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_email2' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_email2',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_emailarbeit' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_emailarbeit',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_blsvmitarbeiter' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_blsvmitarbeiter',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_faxarbeit' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_faxarbeit',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_mobil' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_mobil',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_referentennr' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_referentennr',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_pager' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_pager',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_telprivat' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_telprivat',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_telarbeit' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_telarbeit',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_plzarbeit' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_plzarbeit',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_beschreibung' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_beschreibung',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_refvertragversendet' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_refvertragversendet',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_beschreibungkurz' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_beschreibungkurz',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_umsatzsteuerid' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_umsatzsteuerid',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_kreditorid' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_kreditorid',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_durchwahl' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_durchwahl',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_teilnehmerid' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_teilnehmerid',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_iban' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_iban',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_swift' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_swift',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_qualinetfeuser_blsvwerbung' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_blsvwerbung',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_ehrenamt' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_ehrenamt',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_hauptamt' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_hauptamt',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'tx_qualinetfeuser_datenschutz' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.tx_qualinetfeuser_datenschutz',
		'config' => array(
			'type' => 'check',
			'default' => 0
		),
	),
	'username' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.username',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'gender' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.gender',
			'config' => array(
					'type' => 'select',
					'items' => array(
							array('LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang.xlf:tx_qualinetfeuser_domain_model_feuser.gender_99', '99'),
							array('LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang.xlf:tx_qualinetfeuser_domain_model_feuser.gender_0', '0'),
							array('LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang.xlf:tx_qualinetfeuser_domain_model_feuser.gender_1', '1'),
					),
			),
	),
	'first_name' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.first_name',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'last_name' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.last_name',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'date_of_birth' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.date_of_birth',
		'config' => array(
			'type' => 'input',
			'size' => 7,
			'eval' => 'date,required',
			'default' => time()
		),
	),
	'email' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.email',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'address' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.address',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'city' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.city',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'zip' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.zip',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'telephone' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.telephone',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'fax' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.fax',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'title' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.title',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'country' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.country',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'company' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.company',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'company' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.company',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'www' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.www',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	
	'ustidben' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.ustidben',
			'config' => array(
					'type' => 'check',
					'default' => 0
			),
	),
	
	'ustid' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.ustid',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'comments' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.comments',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
		'freigabefahrgemeinschaft' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.freigabefahrgemeinschaft',
				'config' => array(
						'type' => 'check',
						'default' => 0
				),
		),
		'zustimmungagb' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.zustimmungagb',
				'config' => array(
						'type' => 'check',
						'default' => 0
				),
						),
		'passbild' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.passbild',
				'config' => array(
						'type' => 'group',
						'internal_type' => 'file',
						'uploadfolder' => 'uploads/tx_qualinetfeuser',
						'show_thumbs' => 1,
						'size' => 5,
						'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
						'disallowed' => '',
				),
		),
		'checkrichtigkeit' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.checkrichtigkeit',
				'config' => array(
						'type' => 'check',
						'default' => 0
				),
						),
		'datumrichtigkeit' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser.datumrichtigkeit',
				'config' => array(
						'type' => 'input',
						'size' => 7,
						'eval' => 'date',
						'checkbox' => 1,
						'default' => time()
				),
		),		
);

t3lib_extMgm::addTCAcolumns('fe_users',$tmp_qualinet_feuser_columns);

$TCA['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_QualinetFeuser_Feuser','Tx_QualinetFeuser_Feuser');
$TCA['fe_users']['types']['Tx_QualinetFeuser_Feuser']['showitem'] = $TCA['fe_users']['types']['1']['showitem'];
$TCA['fe_users']['types']['Tx_QualinetFeuser_Feuser']['showitem'] .= ',--div--;LLL:EXT:qualinet_feuser/Resources/Private/Language/locallang_db.xlf:tx_qualinetfeuser_domain_model_feuser,';
$TCA['fe_users']['types']['Tx_QualinetFeuser_Feuser']['showitem'] .= 'tx_qualinetfeuser_vereinsnummer, tx_qualinetfeuser_uebungsleiterid, tx_qualinetfeuser_kontonr, tx_qualinetfeuser_blz, tx_qualinetfeuser_bankname, tx_qualinetfeuser_mailsvondritten, tx_qualinetfeuser_bankeinzug, tx_qualinetfeuser_strasse, tx_qualinetfeuser_zusatz, tx_qualinetfeuser_strassearbeit, tx_qualinetfeuser_gesperrt, tx_qualinetfeuser_stadtarbeit, tx_qualinetfeuser_kontaktnr, tx_qualinetfeuser_email2, tx_qualinetfeuser_emailarbeit, tx_qualinetfeuser_blsvmitarbeiter, tx_qualinetfeuser_faxarbeit, tx_qualinetfeuser_mobil, tx_qualinetfeuser_referentennr, tx_qualinetfeuser_pager, tx_qualinetfeuser_telprivat, tx_qualinetfeuser_telarbeit, tx_qualinetfeuser_plzarbeit, tx_qualinetfeuser_beschreibung, tx_qualinetfeuser_refvertragversendet, tx_qualinetfeuser_beschreibungkurz, tx_qualinetfeuser_umsatzsteuerid, tx_qualinetfeuser_kreditorid, tx_qualinetfeuser_durchwahl, tx_qualinetfeuser_teilnehmerid, tx_qualinetfeuser_iban, tx_qualinetfeuser_swift, tx_qualinetfeuser_blsvwerbung, tx_qualinetfeuser_ehrenamt, tx_qualinetfeuser_hauptamt, tx_qualinetfeuser_datenschutz, username, gender, first_name, last_name, date_of_birth, email, address, city, zip, telephone, fax, title, country';
$TCA['fe_users']['ctrl']['label'] = 'last_name';
$TCA['fe_users']['ctrl']['label_alt'] = 'first_name,date_of_birth, username, name';
$TCA['fe_users']['ctrl']['label_alt_force'] = 1;
?>