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
 * columns
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaire2_Domain_Model_columns extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * different_type
	 * @var select
	 */
	protected $different_type;
	
	/**
	 * maxanswers
	 * @var integer
	 */
	protected $maxanswers;
	
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
	 * Setter for different_type
	 *
	 * @param select $different_type different_type
	 * @return void
	 */
	public function setDifferent_type($different_type) {
		$this->different_type = $different_type;
	}

	/**
	 * Getter for different_type
	 *
	 * @return select different_type
	 */
	public function getDifferent_type() {
		return $this->different_type;
	}
	
	/**
	 * Setter for maxanswers
	 *
	 * @param integer $maxanswers maxanswers
	 * @return void
	 */
	public function setMaxanswers($maxanswers) {
		$this->maxanswers = $maxanswers;
	}

	/**
	 * Getter for maxanswers
	 *
	 * @return integer maxanswers
	 */
	public function getMaxanswers() {
		return $this->maxanswers;
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
	
}
?>