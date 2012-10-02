<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'User' => 'list, delete, edit, update, new, create, show',
		
	),
	// non-cacheable actions
	array(
		'User' => 'delete, edit, update, new, create',
		
	)
);

?>