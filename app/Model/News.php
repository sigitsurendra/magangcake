<?php
App::uses('AppModel', 'Model');
/**
 * News Model
 *
 * @property Newscategory $Newscategory
 */
class News extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idNews';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Content' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
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
		'Newscategory' => array(
			'className' => 'Newscategory',
			'foreignKey' => 'idNewsCategory',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
