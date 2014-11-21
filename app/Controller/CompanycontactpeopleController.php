<?php
App::uses('AppController', 'Controller');
/**
 * Companycontactpeople Controller
 *
 * @property Companycontactperson $Companycontactperson
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompanycontactpeopleController extends AppController {

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
		$this->Companycontactperson->recursive = 0;
		$this->set('companycontactpeople', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Companycontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid companycontactperson'));
		}
		$options = array('conditions' => array('Companycontactperson.' . $this->Companycontactperson->primaryKey => $id));
		$this->set('companycontactperson', $this->Companycontactperson->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Companycontactperson->create();
			if ($this->Companycontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The companycontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companycontactperson could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Companycontactperson->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Companycontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid companycontactperson'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Companycontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The companycontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companycontactperson could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Companycontactperson.' . $this->Companycontactperson->primaryKey => $id));
			$this->request->data = $this->Companycontactperson->find('first', $options);
		}
		$companies = $this->Companycontactperson->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Companycontactperson->id = $id;
		if (!$this->Companycontactperson->exists()) {
			throw new NotFoundException(__('Invalid companycontactperson'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Companycontactperson->delete()) {
			$this->Session->setFlash(__('The companycontactperson has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companycontactperson could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Companycontactperson->recursive = 0;
		$this->set('companycontactpeople', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Companycontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid companycontactperson'));
		}
		$options = array('conditions' => array('Companycontactperson.' . $this->Companycontactperson->primaryKey => $id));
		$this->set('companycontactperson', $this->Companycontactperson->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Companycontactperson->create();
			if ($this->Companycontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The companycontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companycontactperson could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Companycontactperson->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Companycontactperson->exists($id)) {
			throw new NotFoundException(__('Invalid companycontactperson'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Companycontactperson->save($this->request->data)) {
				$this->Session->setFlash(__('The companycontactperson has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companycontactperson could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Companycontactperson.' . $this->Companycontactperson->primaryKey => $id));
			$this->request->data = $this->Companycontactperson->find('first', $options);
		}
		$companies = $this->Companycontactperson->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Companycontactperson->id = $id;
		if (!$this->Companycontactperson->exists()) {
			throw new NotFoundException(__('Invalid companycontactperson'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Companycontactperson->delete()) {
			$this->Session->setFlash(__('The companycontactperson has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companycontactperson could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
