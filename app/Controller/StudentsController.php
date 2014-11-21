<?php
App::uses('AppController', 'Controller');
/**
 * Students Controller
 *
 * @property Student $Student
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudentsController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('daftar','registrationresult');
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
    public function index()
    {
        $this->Student->recursive = 0;
        $this->set('students', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->Student->exists($id)) {
            throw new NotFoundException(__('Invalid student'));
        }
        $options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
        $this->set('student', $this->Student->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Student->create();
            if ($this->Student->save($this->request->data)) {
                $this->Session->setFlash(__('The student has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The student could not be saved. Please, try again.'));
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
    public function edit($id = null)
    {
        if (!$this->Student->exists($id)) {
            throw new NotFoundException(__('Invalid student'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Student->save($this->request->data)) {
                $this->Session->setFlash(__('The student has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The student could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
            $this->request->data = $this->Student->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->Student->id = $id;
        if (!$this->Student->exists()) {
            throw new NotFoundException(__('Invalid student'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Student->delete()) {
            $this->Session->setFlash(__('The student has been deleted.'));
        } else {
            $this->Session->setFlash(__('The student could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
        $this->Student->recursive = 0;
        $this->set('students', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null)
    {
        if (!$this->Student->exists($id)) {
            throw new NotFoundException(__('Invalid student'));
        }
        $options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
        $this->set('student', $this->Student->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->Student->create();
            if ($this->Student->save($this->request->data)) {
                $this->Session->setFlash(__('The student has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The student could not be saved. Please, try again.'));
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
    public function admin_edit($id = null)
    {
        if (!$this->Student->exists($id)) {
            throw new NotFoundException(__('Invalid student'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Student->save($this->request->data)) {
                $this->Session->setFlash(__('The student has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The student could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
            $this->request->data = $this->Student->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null)
    {
        $this->Student->id = $id;
        if (!$this->Student->exists()) {
            throw new NotFoundException(__('Invalid student'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Student->delete()) {
            $this->Session->setFlash(__('The student has been deleted.'));
        } else {
            $this->Session->setFlash(__('The student could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function daftar()
    {
        $this->set('title_for_layout', 'Pendaftaran Anggota');
        $this->loadModel('User');
        if ($this->request->is('post')) {
            $postData = $this->request->data;
            $this->User->create();
            $this->User->UserName = $postData['User']['UserName'];
            $this->User->Password = $postData['User']['Password'];
            $this->User->confirmPassword = $postData['User']['confirmPassword'];
            $this->User->LoginAttempt = 0;
            $this->User->idActivationStatus = 1;
            //debug($this->User);
            //unset($this->Company->Account->validate[’company_id’]);
            $dataSource = $this->Student->getDataSource();
            $dataSource->begin();
            try{
                if($this->User->save($this->User)){
                    $hasilIdUser = $this->User->id;
                    $this->Student->create();
                    $this->Student->Name = $postData['Student']['Name'];
                    $this->Student->Phone1 = $postData['Student']['Phone1'];
                    $this->Student->Email1 = $postData['User']['UserName'];
                    $this->Student->Email2 = $postData['Student']['Email2'];
                    if($this->Student->save($this->Student)){
                        $hasilIdStudent = $this->Student->id;
                        $this->loadModel('Userrole');
                        $this->Userrole->idUser =$hasilIdUser;
                        $this->Userrole->idRole = 2;
                        $this->Userrole->idStudent = $hasilIdStudent;
                        if($this->Userrole->save($this->Userrole)){
                            $dataSource->commit();
                            $this->Session->setFlash('Registrasi Berhasil','messagebox',array(),'mymessage');
                            return $this->redirect(array('action' => 'registrationresult','?'=> array('success'=>'true')));
                        } else {
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
        }
    }

    public function registrationresult(){
        //debug($this);
    }
}
