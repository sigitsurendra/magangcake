<?php
App::uses('AppController', 'Controller');
/**
 * Workexperiences Controller
 *
 * @property Workexperience $Workexperience
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class WorkexperiencesController extends AppController {

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
		$this->Workexperience->recursive = 0;
		$this->set('workexperiences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Workexperience->exists($id)) {
			throw new NotFoundException(__('Invalid workexperience'));
		}
		$options = array('conditions' => array('Workexperience.' . $this->Workexperience->primaryKey => $id));
		$this->set('workexperience', $this->Workexperience->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Workexperience->create();
			if ($this->Workexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The workexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workexperience could not be saved. Please, try again.'));
			}
		}
		$students = $this->Workexperience->Student->find('list');
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
		if (!$this->Workexperience->exists($id)) {
			throw new NotFoundException(__('Invalid workexperience'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Workexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The workexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workexperience could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Workexperience.' . $this->Workexperience->primaryKey => $id));
			$this->request->data = $this->Workexperience->find('first', $options);
		}
		$students = $this->Workexperience->Student->find('list');
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
		$this->Workexperience->id = $id;
		if (!$this->Workexperience->exists()) {
			throw new NotFoundException(__('Invalid workexperience'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Workexperience->delete()) {
			$this->Session->setFlash(__('The workexperience has been deleted.'));
		} else {
			$this->Session->setFlash(__('The workexperience could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Workexperience->recursive = 0;
		$this->set('workexperiences', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Workexperience->exists($id)) {
			throw new NotFoundException(__('Invalid workexperience'));
		}
		$options = array('conditions' => array('Workexperience.' . $this->Workexperience->primaryKey => $id));
		$this->set('workexperience', $this->Workexperience->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Workexperience->create();
			if ($this->Workexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The workexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workexperience could not be saved. Please, try again.'));
			}
		}
		$students = $this->Workexperience->Student->find('list');
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
		if (!$this->Workexperience->exists($id)) {
			throw new NotFoundException(__('Invalid workexperience'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Workexperience->save($this->request->data)) {
				$this->Session->setFlash(__('The workexperience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workexperience could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Workexperience.' . $this->Workexperience->primaryKey => $id));
			$this->request->data = $this->Workexperience->find('first', $options);
		}
		$students = $this->Workexperience->Student->find('list');
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
		$this->Workexperience->id = $id;
		if (!$this->Workexperience->exists()) {
			throw new NotFoundException(__('Invalid workexperience'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Workexperience->delete()) {
			$this->Session->setFlash(__('The workexperience has been deleted.'));
		} else {
			$this->Session->setFlash(__('The workexperience could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
