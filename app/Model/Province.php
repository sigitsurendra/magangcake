<?php
App::uses('AppModel', 'Model');
/**
 * Province Model
 *
 * @property Country $Country
 */
class Province extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'province';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idProvince';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Name' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
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
			'maxLength' => array(
				'rule' => array('maxLength'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength'),
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
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'idCountry',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
