<?php
App::uses('AppController', 'Controller');
/**
 * Created by JetBrains PhpStorm.
 * User: sigitsurendra
 * Date: 11/16/14
 * Time: 12:09 AM
 * To change this template use File | Settings | File Templates.
 */

    /**
     * Users Controller
     * @property SessionComponent $Session
     */
class HomeusercompanyController  extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->deny('index');
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

    }
}