<?php
App::uses('AppController', 'Controller');
/**
 * Studentorganizations Controller
 *
 * @property Studentorganization $Studentorganization
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudentorganizationsController extends AppController {

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
		$this->Studentorganization->recursive = 0;
		$this->set('studentorganizations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Studentorganization->exists($id)) {
			throw new NotFoundException(__('Invalid studentorganization'));
		}
		$options = array('conditions' => array('Studentorganization.' . $this->Studentorganization->primaryKey => $id));
		$this->set('studentorganization', $this->Studentorganization->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Studentorganization->create();
			if ($this->Studentorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The studentorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentorganization could not be saved. Please, try again.'));
			}
		}
		$students = $this->Studentorganization->Student->find('list');
		$educationorganizations = $this->Studentorganization->Educationorganization->find('list');
		$this->set(compact('students', 'educationorganizations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Studentorganization->exists($id)) {
			throw new NotFoundException(__('Invalid studentorganization'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studentorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The studentorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentorganization could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studentorganization.' . $this->Studentorganization->primaryKey => $id));
			$this->request->data = $this->Studentorganization->find('first', $options);
		}
		$students = $this->Studentorganization->Student->find('list');
		$educationorganizations = $this->Studentorganization->Educationorganization->find('list');
		$this->set(compact('students', 'educationorganizations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Studentorganization->id = $id;
		if (!$this->Studentorganization->exists()) {
			throw new NotFoundException(__('Invalid studentorganization'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Studentorganization->delete()) {
			$this->Session->setFlash(__('The studentorganization has been deleted.'));
		} else {
			$this->Session->setFlash(__('The studentorganization could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Studentorganization->recursive = 0;
		$this->set('studentorganizations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Studentorganization->exists($id)) {
			throw new NotFoundException(__('Invalid studentorganization'));
		}
		$options = array('conditions' => array('Studentorganization.' . $this->Studentorganization->primaryKey => $id));
		$this->set('studentorganization', $this->Studentorganization->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Studentorganization->create();
			if ($this->Studentorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The studentorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentorganization could not be saved. Please, try again.'));
			}
		}
		$students = $this->Studentorganization->Student->find('list');
		$educationorganizations = $this->Studentorganization->Educationorganization->find('list');
		$this->set(compact('students', 'educationorganizations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Studentorganization->exists($id)) {
			throw new NotFoundException(__('Invalid studentorganization'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studentorganization->save($this->request->data)) {
				$this->Session->setFlash(__('The studentorganization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentorganization could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studentorganization.' . $this->Studentorganization->primaryKey => $id));
			$this->request->data = $this->Studentorganization->find('first', $options);
		}
		$students = $this->Studentorganization->Student->find('list');
		$educationorganizations = $this->Studentorganization->Educationorganization->find('list');
		$this->set(compact('students', 'educationorganizations'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Studentorganization->id = $id;
		if (!$this->Studentorganization->exists()) {
			throw new NotFoundException(__('Invalid studentorganization'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Studentorganization->delete()) {
			$this->Session->setFlash(__('The studentorganization has been deleted.'));
		} else {
			$this->Session->setFlash(__('The studentorganization could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
