<?php
App::uses('AppModel', 'Model');
/**
 * Jobpostingtag Model
 *
 * @property Tag $Tag
 * @property Jobposting $Jobposting
 */
class Jobpostingtag extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jobpostingtag';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTag,idJobPosting';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'idTag',
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
		)
	);
}
