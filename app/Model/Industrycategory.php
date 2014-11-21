<?php
App::uses('AppModel', 'Model');
/**
 * Industrycategory Model
 *
 */
class Industrycategory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'industrycategory';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idIndustryCategory';

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
}
