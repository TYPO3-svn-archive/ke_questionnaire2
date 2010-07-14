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
 * results
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_KeQuestionnaire2_Domain_Model_result extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * start_tstamp
	 * @var integer
	 */
	protected $start_tstamp;
	
	/**
	 * last_tstamp
	 * @var integer
	 */
	protected $last_tstamp;
	
	/**
	 * finished_tstamp
	 * @var integer
	 */
	protected $finished_tstamp;
	
	/**
	 * xmldata
	 * @var string
	 */
	protected $xmldata;
	
	/**
	 * ip
	 * @var string
	 */
	protected $ip;
	
	/**
	 * mailsent_tstamp
	 * @var string
	 */
	protected $mailsent_tstamp;
	
	/**
	 * auth
	 * @var Tx_KeQuestionnaire2_Domain_Model_authcode
	 */
	protected $auth;
	
	
	
	/**
	 * Setter for start_tstamp
	 *
	 * @param integer $start_tstamp start_tstamp
	 * @return void
	 */
	public function setStart_tstamp($start_tstamp) {
		$this->start_tstamp = $start_tstamp;
	}

	/**
	 * Getter for start_tstamp
	 *
	 * @return integer start_tstamp
	 */
	public function getStart_tstamp() {
		return $this->start_tstamp;
	}
	
	/**
	 * Setter for last_tstamp
	 *
	 * @param integer $last_tstamp last_tstamp
	 * @return void
	 */
	public function setLast_tstamp($last_tstamp) {
		$this->last_tstamp = $last_tstamp;
	}

	/**
	 * Getter for last_tstamp
	 *
	 * @return integer last_tstamp
	 */
	public function getLast_tstamp() {
		return $this->last_tstamp;
	}
	
	/**
	 * Setter for finished_tstamp
	 *
	 * @param integer $finished_tstamp finished_tstamp
	 * @return void
	 */
	public function setFinished_tstamp($finished_tstamp) {
		$this->finished_tstamp = $finished_tstamp;
	}

	/**
	 * Getter for finished_tstamp
	 *
	 * @return integer finished_tstamp
	 */
	public function getFinished_tstamp() {
		return $this->finished_tstamp;
	}
	
	/**
	 * Setter for xmldata
	 *
	 * @param string $xmldata xmldata
	 * @return void
	 */
	public function setXmldata($xmldata) {
		$this->xmldata = $xmldata;
	}

	/**
	 * Getter for xmldata
	 *
	 * @return string xmldata
	 */
	public function getXmldata() {
		return $this->xmldata;
	}
	
	/**
	 * Setter for ip
	 *
	 * @param string $ip ip
	 * @return void
	 */
	public function setIp($ip) {
		$this->ip = $ip;
	}

	/**
	 * Getter for ip
	 *
	 * @return string ip
	 */
	public function getIp() {
		return $this->ip;
	}
	
	/**
	 * Setter for mailsent_tstamp
	 *
	 * @param string $mailsent_tstamp mailsent_tstamp
	 * @return void
	 */
	public function setMailsent_tstamp($mailsent_tstamp) {
		$this->mailsent_tstamp = $mailsent_tstamp;
	}

	/**
	 * Getter for mailsent_tstamp
	 *
	 * @return string mailsent_tstamp
	 */
	public function getMailsent_tstamp() {
		return $this->mailsent_tstamp;
	}
	
	/**
	 * Setter for auth
	 *
	 * @param Tx_KeQuestionnaire2_Domain_Model_authcode $auth auth
	 * @return void
	 */
	public function setAuth(Tx_KeQuestionnaire2_Domain_Model_authcode $auth) {
		$this->auth = $auth;
	}

	/**
	 * Getter for auth
	 *
	 * @return Tx_KeQuestionnaire2_Domain_Model_authcode auth
	 */
	public function getAuth() {
		return $this->auth;
	}
	
}
?>