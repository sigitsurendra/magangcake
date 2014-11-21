<?php
App::uses('AppModel', 'Model');
/**
 * Newstag Model
 *
 * @property Tag $Tag
 * @property News $News
 */
class Newstag extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'newstag';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTag,idNews';


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
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'idNews',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
