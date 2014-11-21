<?php
App::uses('AppController', 'Controller');
/**
 * Educationorganizations Controller
 *
 * @property Educationorganization $Educationorganization
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EducationorganizationsController extends AppController {

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
		$this->Educationorganization->recursive = 0;
		$this->set('educationorganizations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Educationorganization->exists($id)) {
			throw new NotFoundException(__('Invalid educationorganization'));
		}
		$options = array('conditions' => array('Educationorganization.' . $this->Educationorganization->primaryKey => $id));
		$this->set('educationorganization', $this->Educationorganization->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Educationorganization->create();
			if ($this->Educationorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The educationorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationorganization could not be saved. Please, try again.'));
			}
		}
		$educationcategories = $this->Educationorganization->Educationcategory->find('list');
		$this->set(compact('educationcategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Educationorganization->exists($id)) {
			throw new NotFoundException(__('Invalid educationorganization'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educationorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The educationorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationorganization could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Educationorganization.' . $this->Educationorganization->primaryKey => $id));
			$this->request->data = $this->Educationorganization->find('first', $options);
		}
		$educationcategories = $this->Educationorganization->Educationcategory->find('list');
		$this->set(compact('educationcategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Educationorganization->id = $id;
		if (!$this->Educationorganization->exists()) {
			throw new NotFoundException(__('Invalid educationorganization'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Educationorganization->delete()) {
			$this->Session->setFlash(__('The educationorganization has been deleted.'));
		} else {
			$this->Session->setFlash(__('The educationorganization could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Educationorganization->recursive = 0;
		$this->set('educationorganizations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Educationorganization->exists($id)) {
			throw new NotFoundException(__('Invalid educationorganization'));
		}
		$options = array('conditions' => array('Educationorganization.' . $this->Educationorganization->primaryKey => $id));
		$this->set('educationorganization', $this->Educationorganization->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Educationorganization->create();
			if ($this->Educationorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The educationorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationorganization could not be saved. Please, try again.'));
			}
		}
		$educationcategories = $this->Educationorganization->Educationcategory->find('list');
		$this->set(compact('educationcategories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Educationorganization->exists($id)) {
			throw new NotFoundException(__('Invalid educationorganization'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educationorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The educationorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationorganization could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Educationorganization.' . $this->Educationorganization->primaryKey => $id));
			$this->request->data = $this->Educationorganization->find('first', $options);
		}
		$educationcategories = $this->Educationorganization->Educationcategory->find('list');
		$this->set(compact('educationcategories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Educationorganization->id = $id;
		if (!$this->Educationorganization->exists()) {
			throw new NotFoundException(__('Invalid educationorganization'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Educationorganization->delete()) {
			$this->Session->setFlash(__('The educationorganization has been deleted.'));
		} else {
			$this->Session->setFlash(__('The educationorganization could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
