<?php
/**
 * CompanyFixture
 *
 */
class CompanyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'company';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idCompany' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 75, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idActivationStatus' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idIndustryCategory' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idCity' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'timestamp', 'null' => false),
		'LastUpdateDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'CreatedBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LastUpdateBy' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idCompany', 'unique' => 1),
			'fk_Company_ActivationStatus1_idx' => array('column' => 'idActivationStatus', 'unique' => 0),
			'fk_Company_IndustryCategory1_idx' => array('column' => 'idIndustryCategory', 'unique' => 0),
			'fk_Company_City1_idx' => array('column' => 'idCity', 'unique' => 0),
			'fk_Company_User1_idx' => array('column' => 'CreatedBy', 'unique' => 0),
			'fk_Company_User2_idx' => array('column' => 'LastUpdateBy', 'unique' => 0)
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
			'idCompany' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Description' => 'Lorem ipsum dolor sit amet',
			'Address' => 'Lorem ipsum dolor sit amet',
			'Email' => 'Lorem ipsum dolor sit amet',
			'idActivationStatus' => 1,
			'idIndustryCategory' => 1,
			'idCity' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame',
			'CreatedDate' => 1413990833,
			'LastUpdateDate' => 1413990833,
			'CreatedBy' => 1,
			'LastUpdateBy' => 1
		),
	);

}
