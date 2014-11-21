<?php
App::uses('AppController', 'Controller');
/**
 * Activationstatuses Controller
 *
 * @property Activationstatus $Activationstatus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ActivationstatusesController extends AppController {

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
		$this->Activationstatus->recursive = 0;
		$this->set('activationstatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Activationstatus->exists($id)) {
			throw new NotFoundException(__('Invalid activationstatus'));
		}
		$options = array('conditions' => array('Activationstatus.' . $this->Activationstatus->primaryKey => $id));
		$this->set('activationstatus', $this->Activationstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Activationstatus->create();
			if ($this->Activationstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The activationstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activationstatus could not be saved. Please, try again.'));
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
		if (!$this->Activationstatus->exists($id)) {
			throw new NotFoundException(__('Invalid activationstatus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Activationstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The activationstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activationstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Activationstatus.' . $this->Activationstatus->primaryKey => $id));
			$this->request->data = $this->Activationstatus->find('first', $options);
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
		$this->Activationstatus->id = $id;
		if (!$this->Activationstatus->exists()) {
			throw new NotFoundException(__('Invalid activationstatus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Activationstatus->delete()) {
			$this->Session->setFlash(__('The activationstatus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The activationstatus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
