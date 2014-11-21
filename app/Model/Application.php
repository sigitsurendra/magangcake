<?php
App::uses('AppModel', 'Model');
/**
 * Application Model
 *
 * @property Student $Student
 * @property Jobposting $Jobposting
 * @property Applicationstatus $Applicationstatus
 */
class Application extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'application';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idApplication';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ApplicationDate' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
		'Jobposting' => array(
			'className' => 'Jobposting',
			'foreignKey' => 'idJobPosting',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Applicationstatus' => array(
			'className' => 'Applicationstatus',
			'foreignKey' => 'idApplicationStatus',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
