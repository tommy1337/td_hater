<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_tdhater_domain_model_user'] = array(
	'ctrl' => $TCA['tx_tdhater_domain_model_user']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, hate_score, hate_payed, bwg_score, bwg_payed',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, hate_score, hate_payed, bwg_score, bwg_payed,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_tdhater_domain_model_user',
				'foreign_table_where' => 'AND tx_tdhater_domain_model_user.pid=###CURRENT_PID### AND tx_tdhater_domain_model_user.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:td_hater/Resources/Private/Language/locallang_db.xml:tx_tdhater_domain_model_user.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'hate_score' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:td_hater/Resources/Private/Language/locallang_db.xml:tx_tdhater_domain_model_user.hate_score',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'hate_payed' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:td_hater/Resources/Private/Language/locallang_db.xml:tx_tdhater_domain_model_user.hate_payed',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'bwg_score' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:td_hater/Resources/Private/Language/locallang_db.xml:tx_tdhater_domain_model_user.bwg_score',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'bwg_payed' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:td_hater/Resources/Private/Language/locallang_db.xml:tx_tdhater_domain_model_user.bwg_payed',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
	),
);
?>