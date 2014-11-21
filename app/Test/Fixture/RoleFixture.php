<?php
/**
 * RoleFixture
 *
 */
class RoleFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'role';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idRole' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idRole', 'unique' => 1)
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
			'idRole' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Visible' => 'Lorem ipsum dolor sit ame'
		),
	);

}
