<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Hater Score - Liste'
);





t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Haters gonna Hate');


t3lib_extMgm::addLLrefForTCAdescr('tx_tdhater_domain_model_user', 'EXT:td_hater/Resources/Private/Language/locallang_csh_tx_tdhater_domain_model_user.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_tdhater_domain_model_user');
$TCA['tx_tdhater_domain_model_user'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:td_hater/Resources/Private/Language/locallang_db.xml:tx_tdhater_domain_model_user',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/User.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tdhater_domain_model_user.gif'
	),
);

?>