<?php
App::uses('AppController', 'Controller');
/**
 * Newstags Controller
 *
 * @property Newstag $Newstag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NewstagsController extends AppController {

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
		$this->Newstag->recursive = 0;
		$this->set('newstags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Newstag->exists($id)) {
			throw new NotFoundException(__('Invalid newstag'));
		}
		$options = array('conditions' => array('Newstag.' . $this->Newstag->primaryKey => $id));
		$this->set('newstag', $this->Newstag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Newstag->create();
			if ($this->Newstag->save($this->request->data)) {
				$this->Session->setFlash(__('The newstag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newstag could not be saved. Please, try again.'));
			}
		}
		$tags = $this->Newstag->Tag->find('list');
		$news = $this->Newstag->News->find('list');
		$this->set(compact('tags', 'news'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Newstag->exists($id)) {
			throw new NotFoundException(__('Invalid newstag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newstag->save($this->request->data)) {
				$this->Session->setFlash(__('The newstag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newstag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newstag.' . $this->Newstag->primaryKey => $id));
			$this->request->data = $this->Newstag->find('first', $options);
		}
		$tags = $this->Newstag->Tag->find('list');
		$news = $this->Newstag->News->find('list');
		$this->set(compact('tags', 'news'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Newstag->id = $id;
		if (!$this->Newstag->exists()) {
			throw new NotFoundException(__('Invalid newstag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Newstag->delete()) {
			$this->Session->setFlash(__('The newstag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The newstag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Newstag->recursive = 0;
		$this->set('newstags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Newstag->exists($id)) {
			throw new NotFoundException(__('Invalid newstag'));
		}
		$options = array('conditions' => array('Newstag.' . $this->Newstag->primaryKey => $id));
		$this->set('newstag', $this->Newstag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Newstag->create();
			if ($this->Newstag->save($this->request->data)) {
				$this->Session->setFlash(__('The newstag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newstag could not be saved. Please, try again.'));
			}
		}
		$tags = $this->Newstag->Tag->find('list');
		$news = $this->Newstag->News->find('list');
		$this->set(compact('tags', 'news'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Newstag->exists($id)) {
			throw new NotFoundException(__('Invalid newstag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newstag->save($this->request->data)) {
				$this->Session->setFlash(__('The newstag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newstag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newstag.' . $this->Newstag->primaryKey => $id));
			$this->request->data = $this->Newstag->find('first', $options);
		}
		$tags = $this->Newstag->Tag->find('list');
		$news = $this->Newstag->News->find('list');
		$this->set(compact('tags', 'news'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Newstag->id = $id;
		if (!$this->Newstag->exists()) {
			throw new NotFoundException(__('Invalid newstag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Newstag->delete()) {
			$this->Session->setFlash(__('The newstag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The newstag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
