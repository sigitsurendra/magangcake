<?php
App::uses('AppController', 'Controller');
/**
 * Jobpostingcities Controller
 *
 * @property Jobpostingcity $Jobpostingcity
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobpostingcitiesController extends AppController {

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
		$this->Jobpostingcity->recursive = 0;
		$this->set('jobpostingcities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobpostingcity->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingcity'));
		}
		$options = array('conditions' => array('Jobpostingcity.' . $this->Jobpostingcity->primaryKey => $id));
		$this->set('jobpostingcity', $this->Jobpostingcity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobpostingcity->create();
			if ($this->Jobpostingcity->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingcity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingcity could not be saved. Please, try again.'));
			}
		}
		$jobpostings = $this->Jobpostingcity->Jobposting->find('list');
		$cities = $this->Jobpostingcity->City->find('list');
		$this->set(compact('jobpostings', 'cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Jobpostingcity->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingcity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobpostingcity->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingcity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingcity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobpostingcity.' . $this->Jobpostingcity->primaryKey => $id));
			$this->request->data = $this->Jobpostingcity->find('first', $options);
		}
		$jobpostings = $this->Jobpostingcity->Jobposting->find('list');
		$cities = $this->Jobpostingcity->City->find('list');
		$this->set(compact('jobpostings', 'cities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Jobpostingcity->id = $id;
		if (!$this->Jobpostingcity->exists()) {
			throw new NotFoundException(__('Invalid jobpostingcity'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobpostingcity->delete()) {
			$this->Session->setFlash(__('The jobpostingcity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobpostingcity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobpostingcity->recursive = 0;
		$this->set('jobpostingcities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobpostingcity->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingcity'));
		}
		$options = array('conditions' => array('Jobpostingcity.' . $this->Jobpostingcity->primaryKey => $id));
		$this->set('jobpostingcity', $this->Jobpostingcity->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobpostingcity->create();
			if ($this->Jobpostingcity->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingcity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingcity could not be saved. Please, try again.'));
			}
		}
		$jobpostings = $this->Jobpostingcity->Jobposting->find('list');
		$cities = $this->Jobpostingcity->City->find('list');
		$this->set(compact('jobpostings', 'cities'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Jobpostingcity->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingcity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobpostingcity->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingcity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingcity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobpostingcity.' . $this->Jobpostingcity->primaryKey => $id));
			$this->request->data = $this->Jobpostingcity->find('first', $options);
		}
		$jobpostings = $this->Jobpostingcity->Jobposting->find('list');
		$cities = $this->Jobpostingcity->City->find('list');
		$this->set(compact('jobpostings', 'cities'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Jobpostingcity->id = $id;
		if (!$this->Jobpostingcity->exists()) {
			throw new NotFoundException(__('Invalid jobpostingcity'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobpostingcity->delete()) {
			$this->Session->setFlash(__('The jobpostingcity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobpostingcity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
