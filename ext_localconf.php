<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'BLSV.' . $_EXTKEY,
	'Pi1',
	array(
		'Feuser' => 'edit, update, show',
		
	),
	// non-cacheable actions
	array(
		'Feuser' => 'edit, update, show',
		
	)
);

?>