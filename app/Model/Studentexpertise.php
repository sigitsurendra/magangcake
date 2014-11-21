<?php
App::uses('AppModel', 'Model');
/**
 * Studentexpertise Model
 *
 * @property Student $Student
 * @property Expertise $Expertise
 */
class Studentexpertise extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'studentexpertise';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idExpertise,idStudent';


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
		'Expertise' => array(
			'className' => 'Expertise',
			'foreignKey' => 'idExpertise',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
