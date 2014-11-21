<?php
App::uses('AppController', 'Controller');
/**
 * Organizationexperiences Controller
 *
 * @property Organizationexperience $Organizationexperience
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class OrganizationexperiencesController extends AppController {

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
		$this->Organizationexperience->recursive = 0;
		$this->set('organizationexperiences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Organizationexperience->exists($id)) {
			throw new NotFoundException(__('Invalid organizationexperience'));
		}
		$options = array('conditions' => array('Organizationexperience.' . $this->Organizationexperience->primaryKey => $id));
		$this->set('organizationexperience', $this->Organizationexperience->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Organizationexperience->create();
			if ($this->Organizationexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The organizationexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizationexperience could not be saved. Please, try again.'));
			}
		}
		$students = $this->Organizationexperience->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Organizationexperience->exists($id)) {
			throw new NotFoundException(__('Invalid organizationexperience'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Organizationexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The organizationexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizationexperience could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Organizationexperience.' . $this->Organizationexperience->primaryKey => $id));
			$this->request->data = $this->Organizationexperience->find('first', $options);
		}
		$students = $this->Organizationexperience->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Organizationexperience->id = $id;
		if (!$this->Organizationexperience->exists()) {
			throw new NotFoundException(__('Invalid organizationexperience'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Organizationexperience->delete()) {
			$this->Session->setFlash(__('The organizationexperience has been deleted.'));
		} else {
			$this->Session->setFlash(__('The organizationexperience could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Organizationexperience->recursive = 0;
		$this->set('organizationexperiences', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Organizationexperience->exists($id)) {
			throw new NotFoundException(__('Invalid organizationexperience'));
		}
		$options = array('conditions' => array('Organizationexperience.' . $this->Organizationexperience->primaryKey => $id));
		$this->set('organizationexperience', $this->Organizationexperience->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Organizationexperience->create();
			if ($this->Organizationexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The organizationexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizationexperience could not be saved. Please, try again.'));
			}
		}
		$students = $this->Organizationexperience->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Organizationexperience->exists($id)) {
			throw new NotFoundException(__('Invalid organizationexperience'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Organizationexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The organizationexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizationexperience could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Organizationexperience.' . $this->Organizationexperience->primaryKey => $id));
			$this->request->data = $this->Organizationexperience->find('first', $options);
		}
		$students = $this->Organizationexperience->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Organizationexperience->id = $id;
		if (!$this->Organizationexperience->exists()) {
			throw new NotFoundException(__('Invalid organizationexperience'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Organizationexperience->delete()) {
			$this->Session->setFlash(__('The organizationexperience has been deleted.'));
		} else {
			$this->Session->setFlash(__('The organizationexperience could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
