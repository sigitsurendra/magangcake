<?php
App::uses('AppModel', 'Model');
/**
 * Studentorganization Model
 *
 * @property Student $Student
 * @property Educationorganization $Educationorganization
 */
class Studentorganization extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'studentorganization';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idStudent,idEducationOrganization';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'idStudent',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Educationorganization' => array(
			'className' => 'Educationorganization',
			'foreignKey' => 'idEducationOrganization',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
