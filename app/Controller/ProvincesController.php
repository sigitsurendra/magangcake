<?php
App::uses('AppController', 'Controller');
/**
 * Provinces Controller
 *
 * @property Province $Province
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProvincesController extends AppController {

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
		$this->Province->recursive = 0;
		$this->set('provinces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
		$this->set('province', $this->Province->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Province->create();
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Province->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
			$this->request->data = $this->Province->find('first', $options);
		}
		$countries = $this->Province->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Province->id = $id;
		if (!$this->Province->exists()) {
			throw new NotFoundException(__('Invalid province'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Province->delete()) {
			$this->Session->setFlash(__('The province has been deleted.'));
		} else {
			$this->Session->setFlash(__('The province could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Province->recursive = 0;
		$this->set('provinces', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
		$this->set('province', $this->Province->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Province->create();
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Province->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
			$this->request->data = $this->Province->find('first', $options);
		}
		$countries = $this->Province->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Province->id = $id;
		if (!$this->Province->exists()) {
			throw new NotFoundException(__('Invalid province'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Province->delete()) {
			$this->Session->setFlash(__('The province has been deleted.'));
		} else {
			$this->Session->setFlash(__('The province could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
