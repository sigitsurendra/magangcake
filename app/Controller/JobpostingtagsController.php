<?php
App::uses('AppController', 'Controller');
/**
 * Jobpostingtags Controller
 *
 * @property Jobpostingtag $Jobpostingtag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobpostingtagsController extends AppController {

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
		$this->Jobpostingtag->recursive = 0;
		$this->set('jobpostingtags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobpostingtag->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingtag'));
		}
		$options = array('conditions' => array('Jobpostingtag.' . $this->Jobpostingtag->primaryKey => $id));
		$this->set('jobpostingtag', $this->Jobpostingtag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobpostingtag->create();
			if ($this->Jobpostingtag->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingtag could not be saved. Please, try again.'));
			}
		}
		$tags = $this->Jobpostingtag->Tag->find('list');
		$jobpostings = $this->Jobpostingtag->Jobposting->find('list');
		$this->set(compact('tags', 'jobpostings'));
        $myid = $this->request->named['id'];
        $options = array('conditions' => array('Jobposting.' . $this->Jobpostingtag->Jobposting->primaryKey => $myid),
        'fields'=>array('Title'));
        $this->Jobpostingtag->Jobposting->unBindModel(array('belongsTo' => array('JobCategory', 'Jobtype','City')));
        $this->request->data = $this->Jobpostingtag->Jobposting->find('first', $options);
        debugger::dump($this->request->data);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Jobpostingtag->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobpostingtag->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobpostingtag.' . $this->Jobpostingtag->primaryKey => $id));
			$this->request->data = $this->Jobpostingtag->find('first', $options);
		}
		$tags = $this->Jobpostingtag->Tag->find('list');
		$jobpostings = $this->Jobpostingtag->Jobposting->find('list');
		$this->set(compact('tags', 'jobpostings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Jobpostingtag->id = $id;
		if (!$this->Jobpostingtag->exists()) {
			throw new NotFoundException(__('Invalid jobpostingtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobpostingtag->delete()) {
			$this->Session->setFlash(__('The jobpostingtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobpostingtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobpostingtag->recursive = 0;
		$this->set('jobpostingtags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobpostingtag->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingtag'));
		}
		$options = array('conditions' => array('Jobpostingtag.' . $this->Jobpostingtag->primaryKey => $id));
		$this->set('jobpostingtag', $this->Jobpostingtag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobpostingtag->create();
			if ($this->Jobpostingtag->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingtag could not be saved. Please, try again.'));
			}
		}
		$tags = $this->Jobpostingtag->Tag->find('list');
		$jobpostings = $this->Jobpostingtag->Jobposting->find('list');
		$this->set(compact('tags', 'jobpostings'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Jobpostingtag->exists($id)) {
			throw new NotFoundException(__('Invalid jobpostingtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobpostingtag->save($this->request->data)) {
				$this->Session->setFlash(__('The jobpostingtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobpostingtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobpostingtag.' . $this->Jobpostingtag->primaryKey => $id));
			$this->request->data = $this->Jobpostingtag->find('first', $options);
		}
		$tags = $this->Jobpostingtag->Tag->find('list');
		$jobpostings = $this->Jobpostingtag->Jobposting->find('list');
		$this->set(compact('tags', 'jobpostings'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Jobpostingtag->id = $id;
		if (!$this->Jobpostingtag->exists()) {
			throw new NotFoundException(__('Invalid jobpostingtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobpostingtag->delete()) {
			$this->Session->setFlash(__('The jobpostingtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobpostingtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
