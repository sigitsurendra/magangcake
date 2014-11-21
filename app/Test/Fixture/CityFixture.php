<?php
/**
 * CityFixture
 *
 */
class CityFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'city';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idCity' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idProvince' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idCity', 'unique' => 1),
			'fk_City_Province1_idx' => array('column' => 'idProvince', 'unique' => 0)
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
			'idCity' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'idProvince' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame'
		),
	);

}
