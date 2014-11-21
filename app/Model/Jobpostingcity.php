<?php
App::uses('AppModel', 'Model');
/**
 * Jobpostingcity Model
 *
 * @property Jobposting $Jobposting
 * @property City $City
 */
class Jobpostingcity extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jobpostingcity';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idJobPosting,idCity';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Jobposting' => array(
			'className' => 'Jobposting',
			'foreignKey' => 'idJobPosting',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'idCity',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
