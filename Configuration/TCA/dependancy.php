<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_kequestionnaire2_domain_model_dependancy'] = array(
	'ctrl' => $TCA['tx_kequestionnaire2_domain_model_dependancy']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'activating_formula,dependant_question,activating_question,activating_value'
	),
	'types' => array(
		'1' => array('showitem' => 'activating_formula,dependant_question,activating_question,activating_value')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_kequestionnaire2_domain_model_dependancy',
				'foreign_table_where' => 'AND tx_kequestionnaire2_domain_model_dependancy.uid=###REC_FIELD_l18n_parent### AND tx_kequestionnaire2_domain_model_dependancy.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'activating_formula' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_dependancy.activating_formula',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'dependant_question' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_dependancy.dependant_question',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_kequestionnaire2_domain_model_question',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'activating_question' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_dependancy.activating_question',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_kequestionnaire2_domain_model_question',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'activating_value' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_dependancy.activating_value',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_kequestionnaire2_domain_model_answer',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
	),
);
?>