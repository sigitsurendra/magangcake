<?php
App::uses('AppController', 'Controller');
/**
 * Studentexpertises Controller
 *
 * @property Studentexpertise $Studentexpertise
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudentexpertisesController extends AppController {

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
		$this->Studentexpertise->recursive = 0;
		$this->set('studentexpertises', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Studentexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid studentexpertise'));
		}
		$options = array('conditions' => array('Studentexpertise.' . $this->Studentexpertise->primaryKey => $id));
		$this->set('studentexpertise', $this->Studentexpertise->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Studentexpertise->create();
			if ($this->Studentexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The studentexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentexpertise could not be saved. Please, try again.'));
			}
		}
		$students = $this->Studentexpertise->Student->find('list');
		$expertises = $this->Studentexpertise->Expertise->find('list');
		$this->set(compact('students', 'expertises'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Studentexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid studentexpertise'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studentexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The studentexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentexpertise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studentexpertise.' . $this->Studentexpertise->primaryKey => $id));
			$this->request->data = $this->Studentexpertise->find('first', $options);
		}
		$students = $this->Studentexpertise->Student->find('list');
		$expertises = $this->Studentexpertise->Expertise->find('list');
		$this->set(compact('students', 'expertises'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Studentexpertise->id = $id;
		if (!$this->Studentexpertise->exists()) {
			throw new NotFoundException(__('Invalid studentexpertise'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Studentexpertise->delete()) {
			$this->Session->setFlash(__('The studentexpertise has been deleted.'));
		} else {
			$this->Session->setFlash(__('The studentexpertise could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Studentexpertise->recursive = 0;
		$this->set('studentexpertises', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Studentexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid studentexpertise'));
		}
		$options = array('conditions' => array('Studentexpertise.' . $this->Studentexpertise->primaryKey => $id));
		$this->set('studentexpertise', $this->Studentexpertise->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Studentexpertise->create();
			if ($this->Studentexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The studentexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentexpertise could not be saved. Please, try again.'));
			}
		}
		$students = $this->Studentexpertise->Student->find('list');
		$expertises = $this->Studentexpertise->Expertise->find('list');
		$this->set(compact('students', 'expertises'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Studentexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid studentexpertise'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studentexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The studentexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentexpertise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studentexpertise.' . $this->Studentexpertise->primaryKey => $id));
			$this->request->data = $this->Studentexpertise->find('first', $options);
		}
		$students = $this->Studentexpertise->Student->find('list');
		$expertises = $this->Studentexpertise->Expertise->find('list');
		$this->set(compact('students', 'expertises'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Studentexpertise->id = $id;
		if (!$this->Studentexpertise->exists()) {
			throw new NotFoundException(__('Invalid studentexpertise'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Studentexpertise->delete()) {
			$this->Session->setFlash(__('The studentexpertise has been deleted.'));
		} else {
			$this->Session->setFlash(__('The studentexpertise could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
