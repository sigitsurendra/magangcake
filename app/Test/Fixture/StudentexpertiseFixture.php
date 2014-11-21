<?php
/**
 * StudentexpertiseFixture
 *
 */
class StudentexpertiseFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'studentexpertise';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idExpertise' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idStudent' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idExpertise', 'idStudent'), 'unique' => 1),
			'fk_StudentExpertise_Student1_idx' => array('column' => 'idStudent', 'unique' => 0)
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
			'idStudent' => 1
		),
	);

}
