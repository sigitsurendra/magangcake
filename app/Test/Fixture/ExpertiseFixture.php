<?php
/**
 * ExpertiseFixture
 *
 */
class ExpertiseFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'expertise';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idExpertise' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idExpertise', 'unique' => 1)
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
			'idExpertise' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Description' => 'Lorem ipsum dolor sit amet',
			'Visible' => 'Lorem ipsum dolor sit ame'
		),
	);

}
