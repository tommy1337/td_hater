<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Thomas Geyer , Schommer Media GmbH
 *  Christian Ziegler , Schommer Media GmbH
 *  Markus Döll , Schommer Media GmbH
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
 * ************************************************************* */

/**
 *
 *
 * @package smedia_lms_eventcalendar
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_TdHater_Domain_Repository_UserRepository extends Tx_Extbase_Persistence_Repository {

	public function findAll() {
		$query = $this->createQuery();
		$query->setOrderings(array('name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
		return $query->execute();
	}

}

?>