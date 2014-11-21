<?php
App::uses('AppController', 'Controller');
/**
 * Companymemberships Controller
 *
 * @property Companymembership $Companymembership
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompanymembershipsController extends AppController {

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
		$this->Companymembership->recursive = 0;
		$this->set('companymemberships', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Companymembership->exists($id)) {
			throw new NotFoundException(__('Invalid companymembership'));
		}
		$options = array('conditions' => array('Companymembership.' . $this->Companymembership->primaryKey => $id));
		$this->set('companymembership', $this->Companymembership->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Companymembership->create();
			if ($this->Companymembership->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembership could not be saved. Please, try again.'));
			}
		}
		$membershiptypes = $this->Companymembership->Membershiptype->find('list');
		$companies = $this->Companymembership->Company->find('list');
		$activationstatuses = $this->Companymembership->Activationstatus->find('list');
		$this->set(compact('membershiptypes', 'companies', 'activationstatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Companymembership->exists($id)) {
			throw new NotFoundException(__('Invalid companymembership'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Companymembership->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembership could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Companymembership.' . $this->Companymembership->primaryKey => $id));
			$this->request->data = $this->Companymembership->find('first', $options);
		}
		$membershiptypes = $this->Companymembership->Membershiptype->find('list');
		$companies = $this->Companymembership->Company->find('list');
		$activationstatuses = $this->Companymembership->Activationstatus->find('list');
		$this->set(compact('membershiptypes', 'companies', 'activationstatuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Companymembership->id = $id;
		if (!$this->Companymembership->exists()) {
			throw new NotFoundException(__('Invalid companymembership'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Companymembership->delete()) {
			$this->Session->setFlash(__('The companymembership has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companymembership could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Companymembership->recursive = 0;
		$this->set('companymemberships', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Companymembership->exists($id)) {
			throw new NotFoundException(__('Invalid companymembership'));
		}
		$options = array('conditions' => array('Companymembership.' . $this->Companymembership->primaryKey => $id));
		$this->set('companymembership', $this->Companymembership->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Companymembership->create();
			if ($this->Companymembership->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembership could not be saved. Please, try again.'));
			}
		}
		$membershiptypes = $this->Companymembership->Membershiptype->find('list');
		$companies = $this->Companymembership->Company->find('list');
		$activationstatuses = $this->Companymembership->Activationstatus->find('list');
		$this->set(compact('membershiptypes', 'companies', 'activationstatuses'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Companymembership->exists($id)) {
			throw new NotFoundException(__('Invalid companymembership'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Companymembership->save($this->request->data)) {
				$this->Session->setFlash(__('The companymembership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companymembership could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Companymembership.' . $this->Companymembership->primaryKey => $id));
			$this->request->data = $this->Companymembership->find('first', $options);
		}
		$membershiptypes = $this->Companymembership->Membershiptype->find('list');
		$companies = $this->Companymembership->Company->find('list');
		$activationstatuses = $this->Companymembership->Activationstatus->find('list');
		$this->set(compact('membershiptypes', 'companies', 'activationstatuses'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Companymembership->id = $id;
		if (!$this->Companymembership->exists()) {
			throw new NotFoundException(__('Invalid companymembership'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Companymembership->delete()) {
			$this->Session->setFlash(__('The companymembership has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companymembership could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
