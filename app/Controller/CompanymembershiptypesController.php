<?php
App::uses('AppController', 'Controller');
/**
 * Companymembershiptypes Controller
 *
 * @property Companymembershiptype $Companymembershiptype
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompanymembershiptypesController extends AppController {

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
		$this->Companymembershiptype->recursive = 0;
		$this->set('companymembershiptypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Companymembershiptype->exists($id)) {
			throw new NotFoundException(__('Invalid companymembershiptype'));
		}
		$options = array('conditions' => array('Companymembershiptype.' . $this->Companymembershiptype->primaryKey => $id));
		$this->set('companymembershiptype', $this->Companymembershiptype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Companymembershiptype->create();
			if ($this->Companymembershiptype->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembershiptype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembershiptype could not be saved. Please, try again.'));
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
		if (!$this->Companymembershiptype->exists($id)) {
			throw new NotFoundException(__('Invalid companymembershiptype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Companymembershiptype->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembershiptype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembershiptype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Companymembershiptype.' . $this->Companymembershiptype->primaryKey => $id));
			$this->request->data = $this->Companymembershiptype->find('first', $options);
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
		$this->Companymembershiptype->id = $id;
		if (!$this->Companymembershiptype->exists()) {
			throw new NotFoundException(__('Invalid companymembershiptype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Companymembershiptype->delete()) {
			$this->Session->setFlash(__('The companymembershiptype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companymembershiptype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Companymembershiptype->recursive = 0;
		$this->set('companymembershiptypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Companymembershiptype->exists($id)) {
			throw new NotFoundException(__('Invalid companymembershiptype'));
		}
		$options = array('conditions' => array('Companymembershiptype.' . $this->Companymembershiptype->primaryKey => $id));
		$this->set('companymembershiptype', $this->Companymembershiptype->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Companymembershiptype->create();
			if ($this->Companymembershiptype->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembershiptype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembershiptype could not be saved. Please, try again.'));
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
		if (!$this->Companymembershiptype->exists($id)) {
			throw new NotFoundException(__('Invalid companymembershiptype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Companymembershiptype->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembershiptype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembershiptype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Companymembershiptype.' . $this->Companymembershiptype->primaryKey => $id));
			$this->request->data = $this->Companymembershiptype->find('first', $options);
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
		$this->Companymembershiptype->id = $id;
		if (!$this->Companymembershiptype->exists()) {
			throw new NotFoundException(__('Invalid companymembershiptype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Companymembershiptype->delete()) {
			$this->Session->setFlash(__('The companymembershiptype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companymembershiptype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
