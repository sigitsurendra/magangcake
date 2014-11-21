<?php
/**
 * EducationcontactpersonFixture
 *
 */
class EducationcontactpersonFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'educationcontactperson';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idEducationContactPerson' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Phone3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idEducationOrganization' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'timestamp', 'null' => false),
		'LastUpdateDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'CreatedBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LastUpdateBy' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idEducationContactPerson', 'unique' => 1),
			'fk_EducationContactPerson_EducationOrganization1_idx' => array('column' => 'idEducationOrganization', 'unique' => 0),
			'fk_EducationContactPerson_User1_idx' => array('column' => 'CreatedBy', 'unique' => 0),
			'fk_EducationContactPerson_User2_idx' => array('column' => 'LastUpdateBy', 'unique' => 0)
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
			'idEducationContactPerson' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Phone1' => 'Lorem ipsum do',
			'Phone2' => 'Lorem ipsum do',
			'Phone3' => 'Lorem ipsum do',
			'Email' => 'Lorem ipsum dolor sit amet',
			'idEducationOrganization' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame',
			'CreatedDate' => 1413992623,
			'LastUpdateDate' => 1413992623,
			'CreatedBy' => 1,
			'LastUpdateBy' => 1
		),
	);

}
