<?php
App::uses('AppController', 'Controller');
/**
 * Industrycategories Controller
 *
 * @property Industrycategory $Industrycategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IndustrycategoriesController extends AppController {

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
		$this->Industrycategory->recursive = 0;
		$this->set('industrycategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Industrycategory->exists($id)) {
			throw new NotFoundException(__('Invalid industrycategory'));
		}
		$options = array('conditions' => array('Industrycategory.' . $this->Industrycategory->primaryKey => $id));
		$this->set('industrycategory', $this->Industrycategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Industrycategory->create();
			if ($this->Industrycategory->save($this->request->data)) {
				$this->Session->setFlash(__('The industrycategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industrycategory could not be saved. Please, try again.'));
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
		if (!$this->Industrycategory->exists($id)) {
			throw new NotFoundException(__('Invalid industrycategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Industrycategory->save($this->request->data)) {
				$this->Session->setFlash(__('The industrycategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industrycategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Industrycategory.' . $this->Industrycategory->primaryKey => $id));
			$this->request->data = $this->Industrycategory->find('first', $options);
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
		$this->Industrycategory->id = $id;
		if (!$this->Industrycategory->exists()) {
			throw new NotFoundException(__('Invalid industrycategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Industrycategory->delete()) {
			$this->Session->setFlash(__('The industrycategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The industrycategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Industrycategory->recursive = 0;
		$this->set('industrycategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Industrycategory->exists($id)) {
			throw new NotFoundException(__('Invalid industrycategory'));
		}
		$options = array('conditions' => array('Industrycategory.' . $this->Industrycategory->primaryKey => $id));
		$this->set('industrycategory', $this->Industrycategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Industrycategory->create();
			if ($this->Industrycategory->save($this->request->data)) {
				$this->Session->setFlash(__('The industrycategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industrycategory could not be saved. Please, try again.'));
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
		if (!$this->Industrycategory->exists($id)) {
			throw new NotFoundException(__('Invalid industrycategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Industrycategory->save($this->request->data)) {
				$this->Session->setFlash(__('The industrycategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industrycategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Industrycategory.' . $this->Industrycategory->primaryKey => $id));
			$this->request->data = $this->Industrycategory->find('first', $options);
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
		$this->Industrycategory->id = $id;
		if (!$this->Industrycategory->exists()) {
			throw new NotFoundException(__('Invalid industrycategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Industrycategory->delete()) {
			$this->Session->setFlash(__('The industrycategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The industrycategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
