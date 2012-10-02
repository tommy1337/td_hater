<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Tommy 
 *  Dominik 
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package td_hater
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_TdHater_Domain_Model_User extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * hateScore
	 *
	 * @var float
	 */
	protected $hateScore;

	/**
	 * hatePayed
	 *
	 * @var float
	 */
	protected $hatePayed;

	/**
	 * bwgScore
	 *
	 * @var float
	 */
	protected $bwgScore;

	/**
	 * bwgPayed
	 *
	 * @var float
	 */
	protected $bwgPayed;

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the hateScore
	 *
	 * @return float $hateScore
	 */
	public function getHateScore() {
		return $this->hateScore;
	}

	/**
	 * Sets the hateScore
	 *
	 * @param float $hateScore
	 * @return void
	 */
	public function setHateScore($hateScore) {
		$this->hateScore = $hateScore;
	}

	/**
	 * Returns the hatePayed
	 *
	 * @return float $hatePayed
	 */
	public function getHatePayed() {
		return $this->hatePayed;
	}

	/**
	 * Sets the hatePayed
	 *
	 * @param float $hatePayed
	 * @return void
	 */
	public function setHatePayed($hatePayed) {
		$this->hatePayed = $hatePayed;
	}

	/**
	 * Returns the bwgScore
	 *
	 * @return float $bwgScore
	 */
	public function getBwgScore() {
		return $this->bwgScore;
	}

	/**
	 * Sets the bwgScore
	 *
	 * @param float $bwgScore
	 * @return void
	 */
	public function setBwgScore($bwgScore) {
		$this->bwgScore = $bwgScore;
	}

	/**
	 * Returns the bwgPayed
	 *
	 * @return float $bwgPayed
	 */
	public function getBwgPayed() {
		return $this->bwgPayed;
	}

	/**
	 * Sets the bwgPayed
	 *
	 * @param float $bwgPayed
	 * @return void
	 */
	public function setBwgPayed($bwgPayed) {
		$this->bwgPayed = $bwgPayed;
	}

}
?>