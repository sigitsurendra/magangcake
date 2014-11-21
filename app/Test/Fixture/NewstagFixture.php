<?php
/**
 * NewstagFixture
 *
 */
class NewstagFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'newstag';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTag' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idNews' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTag', 'idNews'), 'unique' => 1),
			'fk_NewsTag_Tag1_idx' => array('column' => 'idTag', 'unique' => 0),
			'fk_NewsTag_News1_idx' => array('column' => 'idNews', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idTag' => 1,
			'idNews' => 1
		),
	);

}
