<?php
/**
 * EducationorganizationFixture
 *
 */
class EducationorganizationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'educationorganization';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idEducationOrganization' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idEducationCategory' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'timestamp', 'null' => false),
		'LastUpdateDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'CreatedBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LastUpdateBy' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idEducationOrganization', 'unique' => 1),
			'fk_EducationOrganization_EducationCategory1_idx' => array('column' => 'idEducationCategory', 'unique' => 0),
			'fk_EducationOrganization_User1_idx' => array('column' => 'CreatedBy', 'unique' => 0),
			'fk_EducationOrganization_User2_idx' => array('column' => 'LastUpdateBy', 'unique' => 0)
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
			'idEducationOrganization' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Address' => 'Lorem ipsum dolor sit amet',
			'Phone1' => 'Lorem ipsum do',
			'Phone2' => 'Lorem ipsum do',
			'Phone3' => 'Lorem ipsum do',
			'Fax' => 'Lorem ipsum do',
			'idEducationCategory' => 1,
			'Email' => 'Lorem ipsum dolor sit amet',
			'Visible' => 'Lorem ipsum dolor sit ame',
			'CreatedDate' => 1413992270,
			'LastUpdateDate' => 1413992270,
			'CreatedBy' => 1,
			'LastUpdateBy' => 1
		),
	);

}
