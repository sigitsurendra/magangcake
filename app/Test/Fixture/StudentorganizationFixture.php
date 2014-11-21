<?php
/**
 * StudentorganizationFixture
 *
 */
class StudentorganizationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'studentorganization';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idStudent' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idEducationOrganization' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'YearStart' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'YearEnd' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idStudent', 'idEducationOrganization'), 'unique' => 1),
			'fk_StudentOrganization_EducationOrganization1_idx' => array('column' => 'idEducationOrganization', 'unique' => 0)
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
			'idStudent' => 1,
			'idEducationOrganization' => 1,
			'YearStart' => 1,
			'YearEnd' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame'
		),
	);

}
