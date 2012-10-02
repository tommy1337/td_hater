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
class Tx_TdHater_Controller_UserController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_TdHater_Domain_Repository_UserRepository
	 */
	protected $userRepository;
	
	/**
	 * @param Tx_TdHater_Domain_Repository_UserRepository $userRepository
	 * @return void
	 */
	public function __construct(Tx_TdHater_Domain_Repository_UserRepository $userRepository) {
		$this->userRepository = $userRepository;
	}
	
	/**
	 * action delete
	 *
	 * @param $user
	 * @return void
	 */
	public function deleteAction(Tx_TdHater_Domain_Model_User $user) {
		$this->userRepository->remove($user);
		$this->flashMessageContainer->add('Your User was removed.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $user
	 * @return void
	 */
	public function editAction(Tx_TdHater_Domain_Model_User $user) {
		$this->view->assign('user', $user);
	}

	/**
	 * action update
	 *
	 * @param $user
	 * @return void
	 */
	public function updateAction(Tx_TdHater_Domain_Model_User $user) {
		$this->userRepository->update($user);
		$this->flashMessageContainer->add('Your User was updated.');
		$this->redirect('list');
	}

	/**
	 * action new
	 *
	 * @param $newUser
	 * @dontvalidate $newUser
	 * @return void
	 */
	public function newAction(Tx_TdHater_Domain_Model_User $newUser = NULL) {
		$this->view->assign('newUser', $newUser);
        echo $this->view->render();
        exit;
	}

	/**
	 * action create
	 *
	 * @param $newUser
	 * @return void
	 */
	public function createAction(Tx_TdHater_Domain_Model_User $newUser) {
		$this->userRepository->add($newUser);
		$this->flashMessageContainer->add('Your new User was created.');
		$this->redirect('list');
	}
	
	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$users = $this->userRepository->findAll();
		$this->view->assign('users', $users);
	}

}
?>