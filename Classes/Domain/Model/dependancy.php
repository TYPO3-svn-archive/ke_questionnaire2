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
 * dependancies
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaire2_Domain_Model_dependancy extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * activating_formula
	 * @var string
	 */
	protected $activating_formula;
	
	/**
	 * dependant_question
	 * @var Tx_KeQuestionnaire2_Domain_Model_question
	 */
	protected $dependant_question;
	
	/**
	 * activating_question
	 * @var Tx_KeQuestionnaire2_Domain_Model_question
	 */
	protected $activating_question;
	
	/**
	 * activating_value
	 * @var Tx_KeQuestionnaire2_Domain_Model_answer
	 */
	protected $activating_value;
	
	
	
	/**
	 * Setter for activating_formula
	 *
	 * @param string $activating_formula activating_formula
	 * @return void
	 */
	public function setActivating_formula($activating_formula) {
		$this->activating_formula = $activating_formula;
	}

	/**
	 * Getter for activating_formula
	 *
	 * @return string activating_formula
	 */
	public function getActivating_formula() {
		return $this->activating_formula;
	}
	
	/**
	 * Setter for dependant_question
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_question $dependant_question dependant_question
	 * @return void
	 */
	public function setDependant_question(Tx_KeQuestionnaire2_Domain_Model_question $dependant_question) {
		$this->dependant_question = $dependant_question;
	}

	/**
	 * Getter for dependant_question
	 *
	 * @return Tx_KeQuestionnaire2_Domain_Model_question dependant_question
	 */
	public function getDependant_question() {
		return $this->dependant_question;
	}
	
	/**
	 * Setter for activating_question
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_question $activating_question activating_question
	 * @return void
	 */
	public function setActivating_question(Tx_KeQuestionnaire2_Domain_Model_question $activating_question) {
		$this->activating_question = $activating_question;
	}

	/**
	 * Getter for activating_question
	 *
	 * @return Tx_KeQuestionnaire2_Domain_Model_question activating_question
	 */
	public function getActivating_question() {
		return $this->activating_question;
	}
	
	/**
	 * Setter for activating_value
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_answer $activating_value activating_value
	 * @return void
	 */
	public function setActivating_value(Tx_KeQuestionnaire2_Domain_Model_answer $activating_value) {
		$this->activating_value = $activating_value;
	}

	/**
	 * Getter for activating_value
	 *
	 * @return Tx_KeQuestionnaire2_Domain_Model_answer activating_value
	 */
	public function getActivating_value() {
		return $this->activating_value;
	}
	
}
?>