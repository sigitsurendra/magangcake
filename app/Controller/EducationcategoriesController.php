<?php
App::uses('AppController', 'Controller');
/**
 * Educationcategories Controller
 *
 * @property Educationcategory $Educationcategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EducationcategoriesController extends AppController {

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
		$this->Educationcategory->recursive = 0;
		$this->set('educationcategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Educationcategory->exists($id)) {
			throw new NotFoundException(__('Invalid educationcategory'));
		}
		$options = array('conditions' => array('Educationcategory.' . $this->Educationcategory->primaryKey => $id));
		$this->set('educationcategory', $this->Educationcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Educationcategory->create();
			if ($this->Educationcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcategory could not be saved. Please, try again.'));
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
		if (!$this->Educationcategory->exists($id)) {
			throw new NotFoundException(__('Invalid educationcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educationcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Educationcategory.' . $this->Educationcategory->primaryKey => $id));
			$this->request->data = $this->Educationcategory->find('first', $options);
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
		$this->Educationcategory->id = $id;
		if (!$this->Educationcategory->exists()) {
			throw new NotFoundException(__('Invalid educationcategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Educationcategory->delete()) {
			$this->Session->setFlash(__('The educationcategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The educationcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Educationcategory->recursive = 0;
		$this->set('educationcategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Educationcategory->exists($id)) {
			throw new NotFoundException(__('Invalid educationcategory'));
		}
		$options = array('conditions' => array('Educationcategory.' . $this->Educationcategory->primaryKey => $id));
		$this->set('educationcategory', $this->Educationcategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Educationcategory->create();
			if ($this->Educationcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcategory could not be saved. Please, try again.'));
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
		if (!$this->Educationcategory->exists($id)) {
			throw new NotFoundException(__('Invalid educationcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educationcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The educationcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educationcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Educationcategory.' . $this->Educationcategory->primaryKey => $id));
			$this->request->data = $this->Educationcategory->find('first', $options);
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
		$this->Educationcategory->id = $id;
		if (!$this->Educationcategory->exists()) {
			throw new NotFoundException(__('Invalid educationcategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Educationcategory->delete()) {
			$this->Session->setFlash(__('The educationcategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The educationcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
