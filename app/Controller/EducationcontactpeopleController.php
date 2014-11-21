<?php
App::uses('AppController', 'Controller');
/**
 * Educationcontactpeople Controller
 *
 * @property Educationcontactperson $Educationcontactperson
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EducationcontactpeopleController extends AppController {

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
		$this->Educationcontactperson->recursive = 0;
		$this->set('educationcontactpeople', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Educationcontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid educationcontactperson'));
		}
		$options = array('conditions' => array('Educationcontactperson.' . $this->Educationcontactperson->primaryKey => $id));
		$this->set('educationcontactperson', $this->Educationcontactperson->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Educationcontactperson->create();
			if ($this->Educationcontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcontactperson could not be saved. Please, try again.'));
			}
		}
		$educationorganizations = $this->Educationcontactperson->Educationorganization->find('list');
		$this->set(compact('educationorganizations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Educationcontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid educationcontactperson'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educationcontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcontactperson could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Educationcontactperson.' . $this->Educationcontactperson->primaryKey => $id));
			$this->request->data = $this->Educationcontactperson->find('first', $options);
		}
		$educationorganizations = $this->Educationcontactperson->Educationorganization->find('list');
		$this->set(compact('educationorganizations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Educationcontactperson->id = $id;
		if (!$this->Educationcontactperson->exists()) {
			throw new NotFoundException(__('Invalid educationcontactperson'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Educationcontactperson->delete()) {
			$this->Session->setFlash(__('The educationcontactperson has been deleted.'));
		} else {
			$this->Session->setFlash(__('The educationcontactperson could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Educationcontactperson->recursive = 0;
		$this->set('educationcontactpeople', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Educationcontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid educationcontactperson'));
		}
		$options = array('conditions' => array('Educationcontactperson.' . $this->Educationcontactperson->primaryKey => $id));
		$this->set('educationcontactperson', $this->Educationcontactperson->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Educationcontactperson->create();
			if ($this->Educationcontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcontactperson could not be saved. Please, try again.'));
			}
		}
		$educationorganizations = $this->Educationcontactperson->Educationorganization->find('list');
		$this->set(compact('educationorganizations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Educationcontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid educationcontactperson'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educationcontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcontactperson could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Educationcontactperson.' . $this->Educationcontactperson->primaryKey => $id));
			$this->request->data = $this->Educationcontactperson->find('first', $options);
		}
		$educationorganizations = $this->Educationcontactperson->Educationorganization->find('list');
		$this->set(compact('educationorganizations'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Educationcontactperson->id = $id;
		if (!$this->Educationcontactperson->exists()) {
			throw new NotFoundException(__('Invalid educationcontactperson'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Educationcontactperson->delete()) {
			$this->Session->setFlash(__('The educationcontactperson has been deleted.'));
		} else {
			$this->Session->setFlash(__('The educationcontactperson could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
