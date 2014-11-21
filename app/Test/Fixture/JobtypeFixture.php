<?php
/**
 * JobtypeFixture
 *
 */
class JobtypeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jobtype';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idJobType' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idJobType', 'unique' => 1)
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
			'idJobType' => 1,
			'Name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
