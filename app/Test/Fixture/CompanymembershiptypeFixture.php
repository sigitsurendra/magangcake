<?php
/**
 * CompanymembershiptypeFixture
 *
 */
class CompanymembershiptypeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'companymembershiptype';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idMembershipType' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idMembershipType', 'unique' => 1)
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
			'idMembershipType' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Description' => 'Lorem ipsum dolor sit amet',
			'Visible' => 'Lorem ipsum dolor sit ame'
		),
	);

}
