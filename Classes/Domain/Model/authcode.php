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
 * authcodes
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaire2_Domain_Model_authcode extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * questionnaire data pid
	 * @var integer
	 */
	protected $qpid;
	
	/**
	 * authcode
	 * @var string
	 */
	protected $authcode;
	
	/**
	 * email
	 * @var string
	 */
	protected $email;
	
	/**
	 * fe user
	 * @var integer
	 */
	protected $feuser;
	
	
	
	/**
	 * Setter for qpid
	 *
	 * @param integer $qpid questionnaire data pid
	 * @return void
	 */
	public function setQpid($qpid) {
		$this->qpid = $qpid;
	}

	/**
	 * Getter for qpid
	 *
	 * @return integer questionnaire data pid
	 */
	public function getQpid() {
		return $this->qpid;
	}
	
	/**
	 * Setter for authcode
	 *
	 * @param string $authcode authcode
	 * @return void
	 */
	public function setAuthcode($authcode) {
		$this->authcode = $authcode;
	}

	/**
	 * Getter for authcode
	 *
	 * @return string authcode
	 */
	public function getAuthcode() {
		return $this->authcode;
	}
	
	/**
	 * Setter for email
	 *
	 * @param string $email email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Getter for email
	 *
	 * @return string email
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * Setter for feuser
	 *
	 * @param integer $feuser fe user
	 * @return void
	 */
	public function setFeuser($feuser) {
		$this->feuser = $feuser;
	}

	/**
	 * Getter for feuser
	 *
	 * @return integer fe user
	 */
	public function getFeuser() {
		return $this->feuser;
	}
	
}
?>