<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompaniesController extends AppController {

    public function beforeFilter()
    {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('daftar',"registrationresult","index","view","add");
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
		$this->Company->recursive = 0;
		$this->set('companies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
		$industrycategories = $this->Company->Industrycategory->find('list');
		$cities = $this->Company->City->find('list');
		$activationstatuses = $this->Company->Activationstatus->find('list');
		$this->set(compact('industrycategories', 'cities', 'activationstatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
		}
		$industrycategories = $this->Company->Industrycategory->find('list');
		$cities = $this->Company->City->find('list');
		$activationstatuses = $this->Company->Activationstatus->find('list');
		$this->set(compact('industrycategories', 'cities', 'activationstatuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('The company has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
		$industrycategories = $this->Company->Industrycategory->find('list');
		$cities = $this->Company->City->find('list');
		$activationstatuses = $this->Company->Activationstatus->find('list');
		$this->set(compact('industrycategories', 'cities', 'activationstatuses'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
		}
		$industrycategories = $this->Company->Industrycategory->find('list');
		$cities = $this->Company->City->find('list');
		$activationstatuses = $this->Company->Activationstatus->find('list');
		$this->set(compact('industrycategories', 'cities', 'activationstatuses'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('The company has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function daftar()
    {
        if ($this->request->is('post')) {
            $postData = $this->request->data;
            $this->loadModel('User');
            $this->User->create();
            $this->User->UserName = $postData['User']['UserName'];
            $this->User->Password = $postData['User']['Password'];
            $this->User->confirmPassword = $postData['User']['confirmPassword'];
            $this->User->LoginAttempt = 0;
            $this->User->idActivationStatus = 1;
            //debug($this->User);
            //unset($this->Company->Account->validate[’company_id’]);
            $dataSource = $this->Company->getDataSource();
            $dataSource->begin();
            try{
                if($this->User->save($this->User)){
                    $hasilIdUser = $this->User->id;
                    $this->Company->create();
                    $this->Company->Name = $postData['Company']['Name'];
                    $this->Company->Phone1 = $postData['Company']['Phone1'];
                    $this->Company->Description = $postData['Company']['Description'];
                    $this->Company->Email = $postData['Company']['Email'];
                    $this->Company->Address = $postData['Company']['Address'];
                    $this->Company->idActivationStatus = 1;
                    $this->Company->idIndustryCategory = $postData['Company']['idIndustryCategory'];;;
                    $this->Company->idCity = $postData['Company']['idCity'];;

                    if($this->Company->save($this->Company)){
                        $hasilIdCompany = $this->Company->id;
                        //Debugger::dump($hasilIdCompany);
                        $this->loadModel('Companycontactperson');
                        $this->Companycontactperson->Name = $postData['Companycontactperson']['Name'];
                        $this->Companycontactperson->Email = $postData['Companycontactperson']['Email'];
                        $this->Companycontactperson->Phone1 = $postData['Companycontactperson']['Phone1'];
                        $this->Companycontactperson->idCompany = $hasilIdCompany;
                        if($this->Companycontactperson->save($this->Companycontactperson)){
                            $hasilIdCompanycontactperson = $this->Companycontactperson->id;
                            $this->loadModel('Userrole');
                            $this->Userrole->idUser =$hasilIdUser;
                            $this->Userrole->idRole = 3;
                            $this->Userrole->idCompanyContactPerson = $hasilIdCompanycontactperson;
                            if($this->Userrole->save($this->Userrole)){
                                $dataSource->commit();
                                $this->Session->setFlash('Registrasi Berhasil','messagebox',array(),'mymessage');
                                return $this->redirect(array('action' => 'registrationresult','?'=> array('success'=>'true')));
                            } else {
                                $dataSource->rollback();
                                $this->Session->setFlash(__('Maaf pendaftaran gagal, coba lagi beberapa saat lagi'));
                            }
                        }else {
                            $dataSource->rollback();
                            $this->Session->setFlash(__('Maaf pendaftaran gagal, coba lagi beberapa saat lagi'));
                        }


                    } else {
                        $dataSource->rollback();
                        $this->Session->setFlash(__('Maaf pendaftaran gagal, coba lagi beberapa saat lagi'));
                    }
                } else {
                    $dataSource->rollback();
                    $this->Session->setFlash(__('Maaf pendaftaran gagal, coba lagi beberapa saat lagi'));
                }
            } catch (Exception $e){
                $dataSource->rollback();
                $this->Session->setFlash(__('Maaf pendaftaran gagal, coba lagi beberapa saat lagi'));
            }
        } else {
            $cities = $this->Company->City->find('list');
            $industryCategories = $this->Company->Industrycategory->find('list');
            $this->set(compact('cities','industryCategories'));
            //Debugger::dump($cities);
            //Debugger::dump($userRole);
            //Debugger::dump($this->Session->read("UserRoleMagang"));
            //$sessionUserMagang = $this->Session->read("UserRoleMagang");
            //$idRole = $sessionUserMagang['Userrole']['idRole'];
            //Debugger::dump($idRole);
        }
    }

    public function registrationresult(){
        //debug($this);
    }
}
