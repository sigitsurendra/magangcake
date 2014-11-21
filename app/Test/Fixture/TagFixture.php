<?php
/**
 * TagFixture
 *
 */
class TagFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tag';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTag' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idTag', 'unique' => 1)
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
			'Name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
