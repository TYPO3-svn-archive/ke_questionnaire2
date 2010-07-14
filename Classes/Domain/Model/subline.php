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
 * sublines
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaire2_Domain_Model_subline extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * start
	 * @var string
	 * @validate NotEmpty
	 */
	protected $start;
	
	/**
	 * end
	 * @var string
	 * @validate NotEmpty
	 */
	protected $end;
	
	
	
	/**
	 * Setter for start
	 *
	 * @param string $start start
	 * @return void
	 */
	public function setStart($start) {
		$this->start = $start;
	}

	/**
	 * Getter for start
	 *
	 * @return string start
	 */
	public function getStart() {
		return $this->start;
	}
	
	/**
	 * Setter for end
	 *
	 * @param string $end end
	 * @return void
	 */
	public function setEnd($end) {
		$this->end = $end;
	}

	/**
	 * Getter for end
	 *
	 * @return string end
	 */
	public function getEnd() {
		return $this->end;
	}
	
}
?>