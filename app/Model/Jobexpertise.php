<?php
App::uses('AppModel', 'Model');
/**
 * Jobexpertise Model
 *
 * @property Expertise $Expertise
 * @property Jobposting $JobPosting
 */
class Jobexpertise extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jobexpertise';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idExpertise, idJobPosting';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Expertise' => array(
			'className' => 'Expertise',
			'foreignKey' => 'idExpertise',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'JobPosting' => array(
			'className' => 'Jobposting',
			'foreignKey' => 'idJobPosting',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
