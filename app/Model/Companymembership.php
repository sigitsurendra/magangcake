<?php
App::uses('AppModel', 'Model');
/**
 * Companymembership Model
 *
 * @property Membershiptype $Membershiptype
 * @property Company $Company
 * @property Activationstatus $Activationstatus
 */
class Companymembership extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'companymembership';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idCompanyMembership';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'StartDate' => array(
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
		'EndDate' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'IsPaid' => array(
			'maxLength' => array(
				'rule' => array('maxLength'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'PaymentAmount' => array(
			'money' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'PaymentDate' => array(
			'date' => array(
				'rule' => array('date'),
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
		'Membershiptype' => array(
			'className' => 'Companymembershiptype',
			'foreignKey' => 'idMembershipType',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'idCompany',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Activationstatus' => array(
			'className' => 'Activationstatus',
			'foreignKey' => 'idActivationStatus',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
