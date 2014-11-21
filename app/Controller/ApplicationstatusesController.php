<?php
App::uses('AppController', 'Controller');
/**
 * Applicationstatuses Controller
 *
 * @property Applicationstatus $Applicationstatus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApplicationstatusesController extends AppController {

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
		$this->Applicationstatus->recursive = 0;
		$this->set('applicationstatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Applicationstatus->exists($id)) {
			throw new NotFoundException(__('Invalid applicationstatus'));
		}
		$options = array('conditions' => array('Applicationstatus.' . $this->Applicationstatus->primaryKey => $id));
		$this->set('applicationstatus', $this->Applicationstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Applicationstatus->create();
			if ($this->Applicationstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The applicationstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicationstatus could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Applicationstatus->exists($id)) {
			throw new NotFoundException(__('Invalid applicationstatus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Applicationstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The applicationstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicationstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Applicationstatus.' . $this->Applicationstatus->primaryKey => $id));
			$this->request->data = $this->Applicationstatus->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Applicationstatus->id = $id;
		if (!$this->Applicationstatus->exists()) {
			throw new NotFoundException(__('Invalid applicationstatus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Applicationstatus->delete()) {
			$this->Session->setFlash(__('The applicationstatus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The applicationstatus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Applicationstatus->recursive = 0;
		$this->set('applicationstatuses', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Applicationstatus->exists($id)) {
			throw new NotFoundException(__('Invalid applicationstatus'));
		}
		$options = array('conditions' => array('Applicationstatus.' . $this->Applicationstatus->primaryKey => $id));
		$this->set('applicationstatus', $this->Applicationstatus->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Applicationstatus->create();
			if ($this->Applicationstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The applicationstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicationstatus could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Applicationstatus->exists($id)) {
			throw new NotFoundException(__('Invalid applicationstatus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Applicationstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The applicationstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicationstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Applicationstatus.' . $this->Applicationstatus->primaryKey => $id));
			$this->request->data = $this->Applicationstatus->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Applicationstatus->id = $id;
		if (!$this->Applicationstatus->exists()) {
			throw new NotFoundException(__('Invalid applicationstatus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Applicationstatus->delete()) {
			$this->Session->setFlash(__('The applicationstatus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The applicationstatus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
