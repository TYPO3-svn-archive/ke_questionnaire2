<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'question' => 'index, show, new, create, edit, update, delete','outcome' => 'index, show, new, create, edit, update, delete','authcode' => 'index, show, new, create, edit, update, delete',
	),
	array(
		'question' => 'create, update, delete','outcome' => 'create, update, delete','authcode' => 'create, update, delete',
	)
);

?>