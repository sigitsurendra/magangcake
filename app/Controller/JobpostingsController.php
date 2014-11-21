<?php
App::uses('AppController', 'Controller');
/**
 * Jobpostings Controller
 *
 * @property Jobposting $Jobposting
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobpostingsController extends AppController {

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
		$this->Jobposting->recursive = 0;
		$this->set('jobpostings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobposting->exists($id)) {
			throw new NotFoundException(__('Invalid jobposting'));
		}
		$options = array('conditions' => array('Jobposting.' . $this->Jobposting->primaryKey => $id));
		$this->set('jobposting', $this->Jobposting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobposting->create();
            $this->request->data['Jobposting']['idActivationStatus'] = 1;
            $this->request->data['Jobposting']['idJobType'] = 1;
            $this->request->data['Jobposting']['Visible'] = 'Y';
            $this->request->data['Jobposting']['CreatedBy'] = $this->Auth->user('idUser');
			if ($this->Jobposting->save($this->request->data)) {
				$this->Session->setFlash(__('The jobposting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
                Debugger::dump($this->request->data['Jobposting']);
				$this->Session->setFlash(__('The jobposting could not be saved. Please, try again.'));
			}
		}
		$jobCategories = $this->Jobposting->JobCategory->find('list');
		$jobtypes = $this->Jobposting->Jobtype->find('list');
		$this->set(compact('jobCategories', 'jobtypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Jobposting->exists($id)) {
			throw new NotFoundException(__('Invalid jobposting'));
		}
		if ($this->request->is(array('post', 'put'))) {
            $this->Jobposting->id = $id;
			if ($this->Jobposting->save($this->request->data)) {
				$this->Session->setFlash(__('The jobposting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobposting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobposting.' . $this->Jobposting->primaryKey => $id));
			$this->request->data = $this->Jobposting->find('first', $options);
		}
		$jobCategories = $this->Jobposting->JobCategory->find('list');
		$jobtypes = $this->Jobposting->Jobtype->find('list');
        $cities = $this->Jobposting->City->find('list');
		$this->set(compact('jobCategories', 'jobtypes','cities'));
        //debugger::dump($this->request->data);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Jobposting->id = $id;
		if (!$this->Jobposting->exists()) {
			throw new NotFoundException(__('Invalid jobposting'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobposting->delete()) {
			$this->Session->setFlash(__('The jobposting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobposting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobposting->recursive = 0;
		$this->set('jobpostings', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobposting->exists($id)) {
			throw new NotFoundException(__('Invalid jobposting'));
		}
		$options = array('conditions' => array('Jobposting.' . $this->Jobposting->primaryKey => $id));
		$this->set('jobposting', $this->Jobposting->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobposting->create();
			if ($this->Jobposting->save($this->request->data)) {
				$this->Session->setFlash(__('The jobposting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobposting could not be saved. Please, try again.'));
			}
		}
		$jobCategories = $this->Jobposting->JobCategory->find('list');
		$jobtypes = $this->Jobposting->Jobtype->find('list');
		$this->set(compact('jobCategories', 'jobtypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Jobposting->exists($id)) {
			throw new NotFoundException(__('Invalid jobposting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobposting->save($this->request->data)) {
				$this->Session->setFlash(__('The jobposting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobposting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobposting.' . $this->Jobposting->primaryKey => $id));
			$this->request->data = $this->Jobposting->find('first', $options);
		}
		$jobCategories = $this->Jobposting->JobCategory->find('list');
		$jobtypes = $this->Jobposting->Jobtype->find('list');
		$this->set(compact('jobCategories', 'jobtypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Jobposting->id = $id;
		if (!$this->Jobposting->exists()) {
			throw new NotFoundException(__('Invalid jobposting'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobposting->delete()) {
			$this->Session->setFlash(__('The jobposting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobposting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
