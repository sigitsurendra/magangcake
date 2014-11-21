<?php
/**
 * UserroleFixture
 *
 */
class UserroleFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'userrole';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idUser' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idRole' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idEducationContactPerson' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idStudent' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idCompanyContactPerson' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idUser', 'idRole'), 'unique' => 1),
			'fk_UserRole_Role1_idx' => array('column' => 'idRole', 'unique' => 0),
			'fk_UserRole_EducationContactPerson1_idx' => array('column' => 'idEducationContactPerson', 'unique' => 0),
			'fk_UserRole_Student1_idx' => array('column' => 'idStudent', 'unique' => 0),
			'fk_UserRole_CompanyContactPerson1_idx' => array('column' => 'idCompanyContactPerson', 'unique' => 0)
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
			'idUser' => 1,
			'idRole' => 1,
			'idEducationContactPerson' => 1,
			'idStudent' => 1,
			'idCompanyContactPerson' => 1
		),
	);

}
