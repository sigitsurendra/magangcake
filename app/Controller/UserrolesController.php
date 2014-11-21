<?php
App::uses('AppController', 'Controller');
/**
 * Userroles Controller
 *
 * @property Userrole $Userrole
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UserrolesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Userrole->recursive = 0;
		$this->set('userroles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Userrole->exists($id)) {
			throw new NotFoundException(__('Invalid userrole'));
		}
		$options = array('conditions' => array('Userrole.' . $this->Userrole->primaryKey => $id));
		$this->set('userrole', $this->Userrole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Userrole->create();
			if ($this->Userrole->save($this->request->data)) {
				$this->Session->setFlash(__('The userrole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userrole could not be saved. Please, try again.'));
			}
		}
		$users = $this->Userrole->User->find('list');
		$roles = $this->Userrole->Role->find('list');
		$educationcontactpeople = $this->Userrole->Educationcontactperson->find('list');
		$students = $this->Userrole->Student->find('list');
		$companycontactpeople = $this->Userrole->Companycontactperson->find('list');
		$this->set(compact('users', 'roles', 'educationcontactpeople', 'students', 'companycontactpeople'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Userrole->exists($id)) {
			throw new NotFoundException(__('Invalid userrole'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Userrole->save($this->request->data)) {
				$this->Session->setFlash(__('The userrole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userrole could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Userrole.' . $this->Userrole->primaryKey => $id));
			$this->request->data = $this->Userrole->find('first', $options);
		}
		$users = $this->Userrole->User->find('list');
		$roles = $this->Userrole->Role->find('list');
		$educationcontactpeople = $this->Userrole->Educationcontactperson->find('list');
		$students = $this->Userrole->Student->find('list');
		$companycontactpeople = $this->Userrole->Companycontactperson->find('list');
		$this->set(compact('users', 'roles', 'educationcontactpeople', 'students', 'companycontactpeople'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Userrole->id = $id;
		if (!$this->Userrole->exists()) {
			throw new NotFoundException(__('Invalid userrole'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Userrole->delete()) {
			$this->Session->setFlash(__('The userrole has been deleted.'));
		} else {
			$this->Session->setFlash(__('The userrole could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Userrole->recursive = 0;
		$this->set('userroles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Userrole->exists($id)) {
			throw new NotFoundException(__('Invalid userrole'));
		}
		$options = array('conditions' => array('Userrole.' . $this->Userrole->primaryKey => $id));
		$this->set('userrole', $this->Userrole->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Userrole->create();
			if ($this->Userrole->save($this->request->data)) {
				$this->Session->setFlash(__('The userrole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userrole could not be saved. Please, try again.'));
			}
		}
		$users = $this->Userrole->User->find('list');
		$roles = $this->Userrole->Role->find('list');
		$educationcontactpeople = $this->Userrole->Educationcontactperson->find('list');
		$students = $this->Userrole->Student->find('list');
		$companycontactpeople = $this->Userrole->Companycontactperson->find('list');
		$this->set(compact('users', 'roles', 'educationcontactpeople', 'students', 'companycontactpeople'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Userrole->exists($id)) {
			throw new NotFoundException(__('Invalid userrole'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Userrole->save($this->request->data)) {
				$this->Session->setFlash(__('The userrole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userrole could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Userrole.' . $this->Userrole->primaryKey => $id));
			$this->request->data = $this->Userrole->find('first', $options);
		}
		$users = $this->Userrole->User->find('list');
		$roles = $this->Userrole->Role->find('list');
		$educationcontactpeople = $this->Userrole->Educationcontactperson->find('list');
		$students = $this->Userrole->Student->find('list');
		$companycontactpeople = $this->Userrole->Companycontactperson->find('list');
		$this->set(compact('users', 'roles', 'educationcontactpeople', 'students', 'companycontactpeople'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Userrole->id = $id;
		if (!$this->Userrole->exists()) {
			throw new NotFoundException(__('Invalid userrole'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Userrole->delete()) {
			$this->Session->setFlash(__('The userrole has been deleted.'));
		} else {
			$this->Session->setFlash(__('The userrole could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
