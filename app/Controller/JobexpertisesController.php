<?php
App::uses('AppController', 'Controller');
/**
 * Jobexpertises Controller
 *
 * @property Jobexpertise $Jobexpertise
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobexpertisesController extends AppController {

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
		$this->Jobexpertise->recursive = 0;
		$this->set('jobexpertises', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid jobexpertise'));
		}
		$options = array('conditions' => array('Jobexpertise.' . $this->Jobexpertise->primaryKey => $id));
		$this->set('jobexpertise', $this->Jobexpertise->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobexpertise->create();
			if ($this->Jobexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The jobexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobexpertise could not be saved. Please, try again.'));
			}
		}
		$expertises = $this->Jobexpertise->Expertise->find('list');
		$jobPostings = $this->Jobexpertise->JobPosting->find('list');
		$this->set(compact('expertises', 'jobPostings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Jobexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid jobexpertise'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The jobexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobexpertise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobexpertise.' . $this->Jobexpertise->primaryKey => $id));
			$this->request->data = $this->Jobexpertise->find('first', $options);
		}
		$expertises = $this->Jobexpertise->Expertise->find('list');
		$jobPostings = $this->Jobexpertise->JobPosting->find('list');
		$this->set(compact('expertises', 'jobPostings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Jobexpertise->id = $id;
		if (!$this->Jobexpertise->exists()) {
			throw new NotFoundException(__('Invalid jobexpertise'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobexpertise->delete()) {
			$this->Session->setFlash(__('The jobexpertise has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobexpertise could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobexpertise->recursive = 0;
		$this->set('jobexpertises', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid jobexpertise'));
		}
		$options = array('conditions' => array('Jobexpertise.' . $this->Jobexpertise->primaryKey => $id));
		$this->set('jobexpertise', $this->Jobexpertise->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobexpertise->create();
			if ($this->Jobexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The jobexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobexpertise could not be saved. Please, try again.'));
			}
		}
		$expertises = $this->Jobexpertise->Expertise->find('list');
		$jobPostings = $this->Jobexpertise->JobPosting->find('list');
		$this->set(compact('expertises', 'jobPostings'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Jobexpertise->exists($id)) {
			throw new NotFoundException(__('Invalid jobexpertise'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobexpertise->save($this->request->data)) {
				$this->Session->setFlash(__('The jobexpertise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobexpertise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobexpertise.' . $this->Jobexpertise->primaryKey => $id));
			$this->request->data = $this->Jobexpertise->find('first', $options);
		}
		$expertises = $this->Jobexpertise->Expertise->find('list');
		$jobPostings = $this->Jobexpertise->JobPosting->find('list');
		$this->set(compact('expertises', 'jobPostings'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Jobexpertise->id = $id;
		if (!$this->Jobexpertise->exists()) {
			throw new NotFoundException(__('Invalid jobexpertise'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobexpertise->delete()) {
			$this->Session->setFlash(__('The jobexpertise has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobexpertise could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
