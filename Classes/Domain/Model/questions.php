<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Nadine Schwingler <schwingler@kennziffer.com>, kennziffer.com
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * questions
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaire2_Domain_Model_questions extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * question type
	 * @var select
	 * @validate NotEmpty
	 */
	protected $type;
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * show title
	 * @var boolean
	 */
	protected $show_title;
	
	/**
	 * text
	 * @var string
	 */
	protected $text;
	
	/**
	 * helptext
	 * @var string
	 */
	protected $helptext;
	
	/**
	 * image
	 * @var string
	 */
	protected $image;
	
	/**
	 * image_position
	 * @var select
	 */
	protected $image_position;
	
	/**
	 * mandatory
	 * @var boolean
	 */
	protected $mandatory;
	
	/**
	 * mandatory_correct
	 * @var boolean
	 */
	protected $mandatory_correct;
	
	/**
	 * time
	 * @var integer
	 */
	protected $time;
	
	/**
	 * dependant_show
	 * @var integer
	 */
	protected $dependant_show;
	
	/**
	 * open_type
	 * @var select
	 */
	protected $open_type;
	
	/**
	 * open_pre_text
	 * @var string
	 */
	protected $open_pre_text;
	
	/**
	 * open_in_text
	 * @var string
	 */
	protected $open_in_text;
	
	/**
	 * open_post_text
	 * @var string
	 */
	protected $open_post_text;
	
	/**
	 * open_validation
	 * @var select
	 */
	protected $open_validation;
	
	/**
	 * open_validation_text
	 * @var string
	 */
	protected $open_validation_text;
	
	/**
	 * closed_type
	 * @var select
	 */
	protected $closed_type;
	
	/**
	 * closed_selectsize
	 * @var integer
	 */
	protected $closed_selectsize;
	
	/**
	 * closed_maxanswers
	 * @var integer
	 */
	protected $closed_maxanswers;
	
	/**
	 * closed_randomanswers
	 * @var boolean
	 */
	protected $closed_randomanswers;
	
	/**
	 * closed_inputfield
	 * @var integer
	 */
	protected $closed_inputfield;
	
	/**
	 * matrix_type
	 * @var select
	 */
	protected $matrix_type;
	
	/**
	 * matrix_validation
	 * @var select
	 */
	protected $matrix_validation;
	
	/**
	 * matrix_maxanswers
	 * @var integer
	 */
	protected $matrix_maxanswers;
	
	/**
	 * matrix_inputfield
	 * @var integer
	 */
	protected $matrix_inputfield;
	
	/**
	 * demographic_type
	 * @var select
	 */
	protected $demographic_type;
	
	/**
	 * demographic_fields
	 * @var string
	 */
	protected $demographic_fields;
	
	/**
	 * demographic_addressfields
	 * @var string
	 */
	protected $demographic_addressfields;
	
	/**
	 * privacy_post
	 * @var string
	 */
	protected $privacy_post;
	
	/**
	 * privacy_link
	 * @var string
	 */
	protected $privacy_link;
	
	/**
	 * privacy_file
	 * @var string
	 */
	protected $privacy_file;
	
	/**
	 * question type
	 * @var string
	 */
	protected $type;
	
	/**
	 * dependancy_simple
	 * @var boolean
	 */
	protected $dependancy_simple;
	
	/**
	 * answers
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_answer>
	 */
	protected $answers;
	
	/**
	 * columns
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_column>
	 */
	protected $columns;
	
	/**
	 * subquestions
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_subquestion>
	 */
	protected $subquestions;
	
	/**
	 * sublines
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_subline>
	 */
	protected $sublines;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->answers = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->columns = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->subquestions = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->sublines = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Setter for type
	 *
	 * @param select $type question type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return select question type
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for show_title
	 *
	 * @param boolean $show_title show title
	 * @return void
	 */
	public function setShow_title($show_title) {
		$this->show_title = $show_title;
	}

	/**
	 * Getter for show_title
	 *
	 * @return boolean show title
	 */
	public function getShow_title() {
		return $this->show_title;
	}
	
	/**
	 * Returns the boolean state of show_title
	 *
	 * @return bool The state of show_title
	 */
	public function isShow_title() {
		$this->getShow_title();
	}
	
	/**
	 * Setter for text
	 *
	 * @param string $text text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Getter for text
	 *
	 * @return string text
	 */
	public function getText() {
		return $this->text;
	}
	
	/**
	 * Setter for helptext
	 *
	 * @param string $helptext helptext
	 * @return void
	 */
	public function setHelptext($helptext) {
		$this->helptext = $helptext;
	}

	/**
	 * Getter for helptext
	 *
	 * @return string helptext
	 */
	public function getHelptext() {
		return $this->helptext;
	}
	
	/**
	 * Setter for image
	 *
	 * @param string $image image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Getter for image
	 *
	 * @return string image
	 */
	public function getImage() {
		return $this->image;
	}
	
	/**
	 * Setter for image_position
	 *
	 * @param select $image_position image_position
	 * @return void
	 */
	public function setImage_position($image_position) {
		$this->image_position = $image_position;
	}

	/**
	 * Getter for image_position
	 *
	 * @return select image_position
	 */
	public function getImage_position() {
		return $this->image_position;
	}
	
	/**
	 * Setter for mandatory
	 *
	 * @param boolean $mandatory mandatory
	 * @return void
	 */
	public function setMandatory($mandatory) {
		$this->mandatory = $mandatory;
	}

	/**
	 * Getter for mandatory
	 *
	 * @return boolean mandatory
	 */
	public function getMandatory() {
		return $this->mandatory;
	}
	
	/**
	 * Returns the boolean state of mandatory
	 *
	 * @return bool The state of mandatory
	 */
	public function isMandatory() {
		$this->getMandatory();
	}
	
	/**
	 * Setter for mandatory_correct
	 *
	 * @param boolean $mandatory_correct mandatory_correct
	 * @return void
	 */
	public function setMandatory_correct($mandatory_correct) {
		$this->mandatory_correct = $mandatory_correct;
	}

	/**
	 * Getter for mandatory_correct
	 *
	 * @return boolean mandatory_correct
	 */
	public function getMandatory_correct() {
		return $this->mandatory_correct;
	}
	
	/**
	 * Returns the boolean state of mandatory_correct
	 *
	 * @return bool The state of mandatory_correct
	 */
	public function isMandatory_correct() {
		$this->getMandatory_correct();
	}
	
	/**
	 * Setter for time
	 *
	 * @param integer $time time
	 * @return void
	 */
	public function setTime($time) {
		$this->time = $time;
	}

	/**
	 * Getter for time
	 *
	 * @return integer time
	 */
	public function getTime() {
		return $this->time;
	}
	
	/**
	 * Setter for dependant_show
	 *
	 * @param integer $dependant_show dependant_show
	 * @return void
	 */
	public function setDependant_show($dependant_show) {
		$this->dependant_show = $dependant_show;
	}

	/**
	 * Getter for dependant_show
	 *
	 * @return integer dependant_show
	 */
	public function getDependant_show() {
		return $this->dependant_show;
	}
	
	/**
	 * Setter for open_type
	 *
	 * @param select $open_type open_type
	 * @return void
	 */
	public function setOpen_type($open_type) {
		$this->open_type = $open_type;
	}

	/**
	 * Getter for open_type
	 *
	 * @return select open_type
	 */
	public function getOpen_type() {
		return $this->open_type;
	}
	
	/**
	 * Setter for open_pre_text
	 *
	 * @param string $open_pre_text open_pre_text
	 * @return void
	 */
	public function setOpen_pre_text($open_pre_text) {
		$this->open_pre_text = $open_pre_text;
	}

	/**
	 * Getter for open_pre_text
	 *
	 * @return string open_pre_text
	 */
	public function getOpen_pre_text() {
		return $this->open_pre_text;
	}
	
	/**
	 * Setter for open_in_text
	 *
	 * @param string $open_in_text open_in_text
	 * @return void
	 */
	public function setOpen_in_text($open_in_text) {
		$this->open_in_text = $open_in_text;
	}

	/**
	 * Getter for open_in_text
	 *
	 * @return string open_in_text
	 */
	public function getOpen_in_text() {
		return $this->open_in_text;
	}
	
	/**
	 * Setter for open_post_text
	 *
	 * @param string $open_post_text open_post_text
	 * @return void
	 */
	public function setOpen_post_text($open_post_text) {
		$this->open_post_text = $open_post_text;
	}

	/**
	 * Getter for open_post_text
	 *
	 * @return string open_post_text
	 */
	public function getOpen_post_text() {
		return $this->open_post_text;
	}
	
	/**
	 * Setter for open_validation
	 *
	 * @param select $open_validation open_validation
	 * @return void
	 */
	public function setOpen_validation($open_validation) {
		$this->open_validation = $open_validation;
	}

	/**
	 * Getter for open_validation
	 *
	 * @return select open_validation
	 */
	public function getOpen_validation() {
		return $this->open_validation;
	}
	
	/**
	 * Setter for open_validation_text
	 *
	 * @param string $open_validation_text open_validation_text
	 * @return void
	 */
	public function setOpen_validation_text($open_validation_text) {
		$this->open_validation_text = $open_validation_text;
	}

	/**
	 * Getter for open_validation_text
	 *
	 * @return string open_validation_text
	 */
	public function getOpen_validation_text() {
		return $this->open_validation_text;
	}
	
	/**
	 * Setter for closed_type
	 *
	 * @param select $closed_type closed_type
	 * @return void
	 */
	public function setClosed_type($closed_type) {
		$this->closed_type = $closed_type;
	}

	/**
	 * Getter for closed_type
	 *
	 * @return select closed_type
	 */
	public function getClosed_type() {
		return $this->closed_type;
	}
	
	/**
	 * Setter for closed_selectsize
	 *
	 * @param integer $closed_selectsize closed_selectsize
	 * @return void
	 */
	public function setClosed_selectsize($closed_selectsize) {
		$this->closed_selectsize = $closed_selectsize;
	}

	/**
	 * Getter for closed_selectsize
	 *
	 * @return integer closed_selectsize
	 */
	public function getClosed_selectsize() {
		return $this->closed_selectsize;
	}
	
	/**
	 * Setter for closed_maxanswers
	 *
	 * @param integer $closed_maxanswers closed_maxanswers
	 * @return void
	 */
	public function setClosed_maxanswers($closed_maxanswers) {
		$this->closed_maxanswers = $closed_maxanswers;
	}

	/**
	 * Getter for closed_maxanswers
	 *
	 * @return integer closed_maxanswers
	 */
	public function getClosed_maxanswers() {
		return $this->closed_maxanswers;
	}
	
	/**
	 * Setter for closed_randomanswers
	 *
	 * @param boolean $closed_randomanswers closed_randomanswers
	 * @return void
	 */
	public function setClosed_randomanswers($closed_randomanswers) {
		$this->closed_randomanswers = $closed_randomanswers;
	}

	/**
	 * Getter for closed_randomanswers
	 *
	 * @return boolean closed_randomanswers
	 */
	public function getClosed_randomanswers() {
		return $this->closed_randomanswers;
	}
	
	/**
	 * Returns the boolean state of closed_randomanswers
	 *
	 * @return bool The state of closed_randomanswers
	 */
	public function isClosed_randomanswers() {
		$this->getClosed_randomanswers();
	}
	
	/**
	 * Setter for closed_inputfield
	 *
	 * @param integer $closed_inputfield closed_inputfield
	 * @return void
	 */
	public function setClosed_inputfield($closed_inputfield) {
		$this->closed_inputfield = $closed_inputfield;
	}

	/**
	 * Getter for closed_inputfield
	 *
	 * @return integer closed_inputfield
	 */
	public function getClosed_inputfield() {
		return $this->closed_inputfield;
	}
	
	/**
	 * Setter for matrix_type
	 *
	 * @param select $matrix_type matrix_type
	 * @return void
	 */
	public function setMatrix_type($matrix_type) {
		$this->matrix_type = $matrix_type;
	}

	/**
	 * Getter for matrix_type
	 *
	 * @return select matrix_type
	 */
	public function getMatrix_type() {
		return $this->matrix_type;
	}
	
	/**
	 * Setter for matrix_validation
	 *
	 * @param select $matrix_validation matrix_validation
	 * @return void
	 */
	public function setMatrix_validation($matrix_validation) {
		$this->matrix_validation = $matrix_validation;
	}

	/**
	 * Getter for matrix_validation
	 *
	 * @return select matrix_validation
	 */
	public function getMatrix_validation() {
		return $this->matrix_validation;
	}
	
	/**
	 * Setter for matrix_maxanswers
	 *
	 * @param integer $matrix_maxanswers matrix_maxanswers
	 * @return void
	 */
	public function setMatrix_maxanswers($matrix_maxanswers) {
		$this->matrix_maxanswers = $matrix_maxanswers;
	}

	/**
	 * Getter for matrix_maxanswers
	 *
	 * @return integer matrix_maxanswers
	 */
	public function getMatrix_maxanswers() {
		return $this->matrix_maxanswers;
	}
	
	/**
	 * Setter for matrix_inputfield
	 *
	 * @param integer $matrix_inputfield matrix_inputfield
	 * @return void
	 */
	public function setMatrix_inputfield($matrix_inputfield) {
		$this->matrix_inputfield = $matrix_inputfield;
	}

	/**
	 * Getter for matrix_inputfield
	 *
	 * @return integer matrix_inputfield
	 */
	public function getMatrix_inputfield() {
		return $this->matrix_inputfield;
	}
	
	/**
	 * Setter for demographic_type
	 *
	 * @param select $demographic_type demographic_type
	 * @return void
	 */
	public function setDemographic_type($demographic_type) {
		$this->demographic_type = $demographic_type;
	}

	/**
	 * Getter for demographic_type
	 *
	 * @return select demographic_type
	 */
	public function getDemographic_type() {
		return $this->demographic_type;
	}
	
	/**
	 * Setter for demographic_fields
	 *
	 * @param string $demographic_fields demographic_fields
	 * @return void
	 */
	public function setDemographic_fields($demographic_fields) {
		$this->demographic_fields = $demographic_fields;
	}

	/**
	 * Getter for demographic_fields
	 *
	 * @return string demographic_fields
	 */
	public function getDemographic_fields() {
		return $this->demographic_fields;
	}
	
	/**
	 * Setter for demographic_addressfields
	 *
	 * @param string $demographic_addressfields demographic_addressfields
	 * @return void
	 */
	public function setDemographic_addressfields($demographic_addressfields) {
		$this->demographic_addressfields = $demographic_addressfields;
	}

	/**
	 * Getter for demographic_addressfields
	 *
	 * @return string demographic_addressfields
	 */
	public function getDemographic_addressfields() {
		return $this->demographic_addressfields;
	}
	
	/**
	 * Setter for privacy_post
	 *
	 * @param string $privacy_post privacy_post
	 * @return void
	 */
	public function setPrivacy_post($privacy_post) {
		$this->privacy_post = $privacy_post;
	}

	/**
	 * Getter for privacy_post
	 *
	 * @return string privacy_post
	 */
	public function getPrivacy_post() {
		return $this->privacy_post;
	}
	
	/**
	 * Setter for privacy_link
	 *
	 * @param string $privacy_link privacy_link
	 * @return void
	 */
	public function setPrivacy_link($privacy_link) {
		$this->privacy_link = $privacy_link;
	}

	/**
	 * Getter for privacy_link
	 *
	 * @return string privacy_link
	 */
	public function getPrivacy_link() {
		return $this->privacy_link;
	}
	
	/**
	 * Setter for privacy_file
	 *
	 * @param string $privacy_file privacy_file
	 * @return void
	 */
	public function setPrivacy_file($privacy_file) {
		$this->privacy_file = $privacy_file;
	}

	/**
	 * Getter for privacy_file
	 *
	 * @return string privacy_file
	 */
	public function getPrivacy_file() {
		return $this->privacy_file;
	}
	
	/**
	 * Setter for type
	 *
	 * @param string $type question type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return string question type
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for dependancy_simple
	 *
	 * @param boolean $dependancy_simple dependancy_simple
	 * @return void
	 */
	public function setDependancy_simple($dependancy_simple) {
		$this->dependancy_simple = $dependancy_simple;
	}

	/**
	 * Getter for dependancy_simple
	 *
	 * @return boolean dependancy_simple
	 */
	public function getDependancy_simple() {
		return $this->dependancy_simple;
	}
	
	/**
	 * Returns the boolean state of dependancy_simple
	 *
	 * @return bool The state of dependancy_simple
	 */
	public function isDependancy_simple() {
		$this->getDependancy_simple();
	}
	
	/**
	 * Setter for answers
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_answer> $answers answers
	 * @return void
	 */
	public function setAnswers(Tx_Extbase_Persistence_ObjectStorage $answers) {
		$this->answers = $answers;
	}

	/**
	 * Getter for answers
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_answer> answers
	 */
	public function getAnswers() {
		return $this->answers;
	}
	
	/**
	 * Adds a Answer
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_answer The Answer to be added
	 * @return void
	 */
	public function addAnswer(Tx_KeQuestionnaire2_Domain_Model_answer $answer) {
		$this->answers->attach($answer);
	}
	
	/**
	 * Removes a Answer
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_answer The Answer to be removed
	 * @return void
	 */
	public function removeAnswer(Tx_KeQuestionnaire2_Domain_Model_answer $answer) {
		$this->answers->detach($answer);
	}
	
	/**
	 * Setter for columns
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_column> $columns columns
	 * @return void
	 */
	public function setColumns(Tx_Extbase_Persistence_ObjectStorage $columns) {
		$this->columns = $columns;
	}

	/**
	 * Getter for columns
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_column> columns
	 */
	public function getColumns() {
		return $this->columns;
	}
	
	/**
	 * Adds a Column
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_column The Column to be added
	 * @return void
	 */
	public function addColumn(Tx_KeQuestionnaire2_Domain_Model_column $column) {
		$this->columns->attach($column);
	}
	
	/**
	 * Removes a Column
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_column The Column to be removed
	 * @return void
	 */
	public function removeColumn(Tx_KeQuestionnaire2_Domain_Model_column $column) {
		$this->columns->detach($column);
	}
	
	/**
	 * Setter for subquestions
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_subquestion> $subquestions subquestions
	 * @return void
	 */
	public function setSubquestions(Tx_Extbase_Persistence_ObjectStorage $subquestions) {
		$this->subquestions = $subquestions;
	}

	/**
	 * Getter for subquestions
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_subquestion> subquestions
	 */
	public function getSubquestions() {
		return $this->subquestions;
	}
	
	/**
	 * Adds a Subquestion
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_subquestion The Subquestion to be added
	 * @return void
	 */
	public function addSubquestion(Tx_KeQuestionnaire2_Domain_Model_subquestion $subquestion) {
		$this->subquestions->attach($subquestion);
	}
	
	/**
	 * Removes a Subquestion
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_subquestion The Subquestion to be removed
	 * @return void
	 */
	public function removeSubquestion(Tx_KeQuestionnaire2_Domain_Model_subquestion $subquestion) {
		$this->subquestions->detach($subquestion);
	}
	
	/**
	 * Setter for sublines
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_subline> $sublines sublines
	 * @return void
	 */
	public function setSublines(Tx_Extbase_Persistence_ObjectStorage $sublines) {
		$this->sublines = $sublines;
	}

	/**
	 * Getter for sublines
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_KeQuestionnaire2_Domain_Model_subline> sublines
	 */
	public function getSublines() {
		return $this->sublines;
	}
	
	/**
	 * Adds a Subline
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_subline The Subline to be added
	 * @return void
	 */
	public function addSubline(Tx_KeQuestionnaire2_Domain_Model_subline $subline) {
		$this->sublines->attach($subline);
	}
	
	/**
	 * Removes a Subline
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_subline The Subline to be removed
	 * @return void
	 */
	public function removeSubline(Tx_KeQuestionnaire2_Domain_Model_subline $subline) {
		$this->sublines->detach($subline);
	}
	
}
?>