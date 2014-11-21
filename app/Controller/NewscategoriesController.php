<?php
App::uses('AppController', 'Controller');
/**
 * Newscategories Controller
 *
 * @property Newscategory $Newscategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NewscategoriesController extends AppController {

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
		$this->Newscategory->recursive = 0;
		$this->set('newscategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Newscategory->exists($id)) {
			throw new NotFoundException(__('Invalid newscategory'));
		}
		$options = array('conditions' => array('Newscategory.' . $this->Newscategory->primaryKey => $id));
		$this->set('newscategory', $this->Newscategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Newscategory->create();
			if ($this->Newscategory->save($this->request->data)) {
				$this->Session->setFlash(__('The newscategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newscategory could not be saved. Please, try again.'));
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
		if (!$this->Newscategory->exists($id)) {
			throw new NotFoundException(__('Invalid newscategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newscategory->save($this->request->data)) {
				$this->Session->setFlash(__('The newscategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newscategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newscategory.' . $this->Newscategory->primaryKey => $id));
			$this->request->data = $this->Newscategory->find('first', $options);
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
		$this->Newscategory->id = $id;
		if (!$this->Newscategory->exists()) {
			throw new NotFoundException(__('Invalid newscategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Newscategory->delete()) {
			$this->Session->setFlash(__('The newscategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The newscategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Newscategory->recursive = 0;
		$this->set('newscategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Newscategory->exists($id)) {
			throw new NotFoundException(__('Invalid newscategory'));
		}
		$options = array('conditions' => array('Newscategory.' . $this->Newscategory->primaryKey => $id));
		$this->set('newscategory', $this->Newscategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Newscategory->create();
			if ($this->Newscategory->save($this->request->data)) {
				$this->Session->setFlash(__('The newscategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newscategory could not be saved. Please, try again.'));
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
		if (!$this->Newscategory->exists($id)) {
			throw new NotFoundException(__('Invalid newscategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newscategory->save($this->request->data)) {
				$this->Session->setFlash(__('The newscategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newscategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newscategory.' . $this->Newscategory->primaryKey => $id));
			$this->request->data = $this->Newscategory->find('first', $options);
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
		$this->Newscategory->id = $id;
		if (!$this->Newscategory->exists()) {
			throw new NotFoundException(__('Invalid newscategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Newscategory->delete()) {
			$this->Session->setFlash(__('The newscategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The newscategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
