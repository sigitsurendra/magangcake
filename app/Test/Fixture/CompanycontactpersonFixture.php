<?php
/**
 * CompanycontactpersonFixture
 *
 */
class CompanycontactpersonFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'companycontactperson';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idCompanyContactPerson' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 70, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idCompany' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'timestamp', 'null' => false),
		'LastUpdateDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'CreatedBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LastUpdateBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idCompanyContactPerson', 'unique' => 1),
			'fk_CompanyContactPerson_Company1_idx' => array('column' => 'idCompany', 'unique' => 0),
			'fk_CompanyContactPerson_User1_idx' => array('column' => 'CreatedBy', 'unique' => 0),
			'fk_CompanyContactPerson_User2_idx' => array('column' => 'LastUpdateBy', 'unique' => 0)
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
			'idCompanyContactPerson' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Email' => 'Lorem ipsum dolor sit amet',
			'Phone1' => 'Lorem ipsum do',
			'Phone2' => 'Lorem ipsum do',
			'Phone3' => 'Lorem ipsum dolor sit amet',
			'idCompany' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame',
			'CreatedDate' => 1413991246,
			'LastUpdateDate' => 1413991246,
			'CreatedBy' => 1,
			'LastUpdateBy' => 1
		),
	);

}
