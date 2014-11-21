<?php
/**
 * ProvinceFixture
 *
 */
class ProvinceFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'province';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idProvince' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idCountry' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idProvince', 'unique' => 1),
			'fk_Province_Country1_idx' => array('column' => 'idCountry', 'unique' => 0)
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
			'idProvince' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'idCountry' => 1
		),
	);

}
