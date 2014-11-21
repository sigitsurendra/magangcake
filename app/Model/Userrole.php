<?php
App::uses('AppModel', 'Model');
/**
 * Userrole Model
 *
 * @property User $User
 * @property Role $Role
 * @property Educationcontactperson $Educationcontactperson
 * @property Student $Student
 * @property Companycontactperson $Companycontactperson
 */
class Userrole extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'userrole';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idUser, idRole';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'idUser',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'idRole',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Educationcontactperson' => array(
			'className' => 'Educationcontactperson',
			'foreignKey' => 'idEducationContactPerson',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'idStudent',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Companycontactperson' => array(
			'className' => 'Companycontactperson',
			'foreignKey' => 'idCompanyContactPerson',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
