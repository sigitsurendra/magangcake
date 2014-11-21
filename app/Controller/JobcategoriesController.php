<?php
App::uses('AppController', 'Controller');
/**
 * Jobcategories Controller
 *
 * @property Jobcategory $Jobcategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobcategoriesController extends AppController {

    public function beforeFilter()
    {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('listofjobcategories');
    }
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
		$this->Jobcategory->recursive = 0;
		$this->set('jobcategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobcategory->exists($id)) {
			throw new NotFoundException(__('Invalid jobcategory'));
		}
		$options = array('conditions' => array('Jobcategory.' . $this->Jobcategory->primaryKey => $id));
		$this->set('jobcategory', $this->Jobcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobcategory->create();
			if ($this->Jobcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The jobcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobcategory could not be saved. Please, try again.'));
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
		if (!$this->Jobcategory->exists($id)) {
			throw new NotFoundException(__('Invalid jobcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The jobcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobcategory.' . $this->Jobcategory->primaryKey => $id));
			$this->request->data = $this->Jobcategory->find('first', $options);
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
		$this->Jobcategory->id = $id;
		if (!$this->Jobcategory->exists()) {
			throw new NotFoundException(__('Invalid jobcategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobcategory->delete()) {
			$this->Session->setFlash(__('The jobcategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobcategory->recursive = 0;
		$this->set('jobcategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobcategory->exists($id)) {
			throw new NotFoundException(__('Invalid jobcategory'));
		}
		$options = array('conditions' => array('Jobcategory.' . $this->Jobcategory->primaryKey => $id));
		$this->set('jobcategory', $this->Jobcategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobcategory->create();
			if ($this->Jobcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The jobcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobcategory could not be saved. Please, try again.'));
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
		if (!$this->Jobcategory->exists($id)) {
			throw new NotFoundException(__('Invalid jobcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The jobcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobcategory.' . $this->Jobcategory->primaryKey => $id));
			$this->request->data = $this->Jobcategory->find('first', $options);
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
		$this->Jobcategory->id = $id;
		if (!$this->Jobcategory->exists()) {
			throw new NotFoundException(__('Invalid jobcategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobcategory->delete()) {
			$this->Session->setFlash(__('The jobcategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function listofjobcategories(){
        $this->autoRender = false;
        $temp = '%'.$_GET['term'].'%';
        $jobcategories = $this->Jobcategory->find('all',array('conditions'=>array('Jobcategory.Name LIKE'=>$temp)));
        //Debugger::dump($this->_encodeCities($cities));
        echo json_encode($this->_encodeJobCategory($jobcategories));
    }

    protected function _encodeJobCategory($postData = array()) {
        $temp = array();
        foreach ($postData as $Jobcategory) {
            array_push($temp, array(
                'id' => $Jobcategory['Jobcategory']['idJobCategory'],
                'label' => $Jobcategory['Jobcategory']['Name'],
                'value' => $Jobcategory['Jobcategory']['Name']
            ));
        }
        return $temp;
    }

}
