<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'ke Questionnaire 2'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'ke Questionnaire 2');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list.xml');


t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_question','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_question.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_question');
$TCA['tx_kequestionnaire2_domain_model_question'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question',
		'label' 			=> 'type',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/question.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_question.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_answer','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_answer.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_answer');
$TCA['tx_kequestionnaire2_domain_model_answer'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_answer',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/answer.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_answer.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_column','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_column.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_column');
$TCA['tx_kequestionnaire2_domain_model_column'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_column',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/column.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_column.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_subquestion','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_subquestion.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_subquestion');
$TCA['tx_kequestionnaire2_domain_model_subquestion'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_subquestion',
		'label' 			=> 'title_line',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/subquestion.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_subquestion.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_subline','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_subline.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_subline');
$TCA['tx_kequestionnaire2_domain_model_subline'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_subline',
		'label' 			=> 'start',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/subline.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_subline.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_dependancy','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_dependancy.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_dependancy');
$TCA['tx_kequestionnaire2_domain_model_dependancy'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_dependancy',
		'label' 			=> 'activating_formula',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/dependancy.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_dependancy.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_outcome','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_outcome.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_outcome');
$TCA['tx_kequestionnaire2_domain_model_outcome'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_outcome',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/outcome.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_outcome.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_authcode','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_authcode.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_authcode');
$TCA['tx_kequestionnaire2_domain_model_authcode'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_authcode',
		'label' 			=> 'qpid',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/authcode.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_authcode.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_kequestionnaire2_domain_model_result','EXT:ke_questionnaire2/Resources/Private/Language/locallang_csh_tx_kequestionnaire2_domain_model_result.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_kequestionnaire2_domain_model_result');
$TCA['tx_kequestionnaire2_domain_model_result'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_result',
		'label' 			=> 'start_tstamp',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/result.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_kequestionnaire2_domain_model_result.gif'
	)
);

?>