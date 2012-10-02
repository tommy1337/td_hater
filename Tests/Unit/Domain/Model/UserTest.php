<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Tommy 
 *  			Dominik 
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
 * Test case for class Tx_TdHater_Domain_Model_User.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Haters gonna Hate
 *
 * @author Tommy 
 * @author Dominik 
 */
class Tx_TdHater_Domain_Model_UserTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_TdHater_Domain_Model_User
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_TdHater_Domain_Model_User();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getHateScoreReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getHateScore()
		);
	}

	/**
	 * @test
	 */
	public function setHateScoreForFloatSetsHateScore() { 
		$this->fixture->setHateScore(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getHateScore()
		);
	}
	
	/**
	 * @test
	 */
	public function getHatePayedReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getHatePayed()
		);
	}

	/**
	 * @test
	 */
	public function setHatePayedForFloatSetsHatePayed() { 
		$this->fixture->setHatePayed(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getHatePayed()
		);
	}
	
	/**
	 * @test
	 */
	public function getBwgScoreReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getBwgScore()
		);
	}

	/**
	 * @test
	 */
	public function setBwgScoreForFloatSetsBwgScore() { 
		$this->fixture->setBwgScore(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getBwgScore()
		);
	}
	
	/**
	 * @test
	 */
	public function getBwgPayedReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getBwgPayed()
		);
	}

	/**
	 * @test
	 */
	public function setBwgPayedForFloatSetsBwgPayed() { 
		$this->fixture->setBwgPayed(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getBwgPayed()
		);
	}
	
}
?>