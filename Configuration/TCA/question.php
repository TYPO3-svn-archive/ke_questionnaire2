<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_kequestionnaire2_domain_model_question'] = array(
	'ctrl' => $TCA['tx_kequestionnaire2_domain_model_question']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'type,title,show_title,text,helptext,image,image_position,mandatory,mandatory_correct,time,dependant_show,open_type,open_pre_text,open_in_text,open_post_text,open_validation,open_validation_text,closed_type,closed_selectsize,closed_maxanswers,closed_randomanswers,closed_inputfield,matrix_type,matrix_validation,matrix_maxanswers,matrix_inputfield,demographic_type,demographic_fields,demographic_addressfields,privacy_post,privacy_link,privacy_file,type,dependancy_simple,answers,columns,subquestions,sublines'
	),
	'types' => array(
		'1' => array('showitem' => 'type,title,show_title,text,helptext,image,image_position,mandatory,mandatory_correct,time,dependant_show,open_type,open_pre_text,open_in_text,open_post_text,open_validation,open_validation_text,closed_type,closed_selectsize,closed_maxanswers,closed_randomanswers,closed_inputfield,matrix_type,matrix_validation,matrix_maxanswers,matrix_inputfield,demographic_type,demographic_fields,demographic_addressfields,privacy_post,privacy_link,privacy_file,type,dependancy_simple,answers,columns,subquestions,sublines')
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
				'foreign_table' => 'tx_kequestionnaire2_domain_model_question',
				'foreign_table_where' => 'AND tx_kequestionnaire2_domain_model_question.uid=###REC_FIELD_l18n_parent### AND tx_kequestionnaire2_domain_model_question.sys_language_uid IN (-1,0)',
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
		'type' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.type',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'show_title' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.show_title',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'helptext' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.helptext',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.image',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image_position' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.image_position',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'mandatory' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.mandatory',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'mandatory_correct' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.mandatory_correct',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'time' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.time',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'dependant_show' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.dependant_show',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'open_type' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.open_type',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'open_pre_text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.open_pre_text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'open_in_text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.open_in_text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'open_post_text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.open_post_text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'open_validation' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.open_validation',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'open_validation_text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.open_validation_text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'closed_type' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.closed_type',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'closed_selectsize' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.closed_selectsize',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'closed_maxanswers' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.closed_maxanswers',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'closed_randomanswers' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.closed_randomanswers',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'closed_inputfield' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.closed_inputfield',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'matrix_type' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.matrix_type',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'matrix_validation' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.matrix_validation',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'matrix_maxanswers' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.matrix_maxanswers',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'matrix_inputfield' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.matrix_inputfield',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'demographic_type' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.demographic_type',
			'config'  => array(
				'type' => 'select',
				'items' => array (
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			)
		),
		'demographic_fields' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.demographic_fields',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'demographic_addressfields' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.demographic_addressfields',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'privacy_post' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.privacy_post',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'privacy_link' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.privacy_link',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'privacy_file' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.privacy_file',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'type' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.type',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'dependancy_simple' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.dependancy_simple',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'answers' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.answers',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_kequestionnaire2_domain_model_answer',
				'foreign_field' => 'question',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'columns' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.columns',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_kequestionnaire2_domain_model_column',
				'foreign_field' => 'question',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'subquestions' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.subquestions',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_kequestionnaire2_domain_model_subquestion',
				'foreign_field' => 'question',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'sublines' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:ke_questionnaire2/Resources/Private/Language/locallang_db.xml:tx_kequestionnaire2_domain_model_question.sublines',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_kequestionnaire2_domain_model_subline',
				'foreign_field' => 'question',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
	),
);
?>