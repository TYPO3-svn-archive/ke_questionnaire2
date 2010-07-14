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
 * answers
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaire2_Domain_Model_answers extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * value
	 * @var integer
	 */
	protected $value;
	
	/**
	 * correct_answer
	 * @var boolean
	 */
	protected $correct_answer;
	
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
	 * finish_page_uid
	 * @var integer
	 */
	protected $finish_page_uid;
	
	/**
	 * show_input
	 * @var boolean
	 */
	protected $show_input;
	
	
	
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
	 * Setter for value
	 *
	 * @param integer $value value
	 * @return void
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * Getter for value
	 *
	 * @return integer value
	 */
	public function getValue() {
		return $this->value;
	}
	
	/**
	 * Setter for correct_answer
	 *
	 * @param boolean $correct_answer correct_answer
	 * @return void
	 */
	public function setCorrect_answer($correct_answer) {
		$this->correct_answer = $correct_answer;
	}

	/**
	 * Getter for correct_answer
	 *
	 * @return boolean correct_answer
	 */
	public function getCorrect_answer() {
		return $this->correct_answer;
	}
	
	/**
	 * Returns the boolean state of correct_answer
	 *
	 * @return bool The state of correct_answer
	 */
	public function isCorrect_answer() {
		$this->getCorrect_answer();
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
	 * Setter for finish_page_uid
	 *
	 * @param integer $finish_page_uid finish_page_uid
	 * @return void
	 */
	public function setFinish_page_uid($finish_page_uid) {
		$this->finish_page_uid = $finish_page_uid;
	}

	/**
	 * Getter for finish_page_uid
	 *
	 * @return integer finish_page_uid
	 */
	public function getFinish_page_uid() {
		return $this->finish_page_uid;
	}
	
	/**
	 * Setter for show_input
	 *
	 * @param boolean $show_input show_input
	 * @return void
	 */
	public function setShow_input($show_input) {
		$this->show_input = $show_input;
	}

	/**
	 * Getter for show_input
	 *
	 * @return boolean show_input
	 */
	public function getShow_input() {
		return $this->show_input;
	}
	
	/**
	 * Returns the boolean state of show_input
	 *
	 * @return bool The state of show_input
	 */
	public function isShow_input() {
		$this->getShow_input();
	}
	
}
?>