<?php
/**
 * ApplicationFixture
 *
 */
class ApplicationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'application';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idApplication' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ApplicationDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idStudent' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idJobPosting' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idApplicationStatus' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idApplication', 'unique' => 1),
			'fk_Application_Student1_idx' => array('column' => 'idStudent', 'unique' => 0),
			'fk_Application_JobPosting1_idx' => array('column' => 'idJobPosting', 'unique' => 0),
			'fk_Application_ApplicationStatus1_idx' => array('column' => 'idApplicationStatus', 'unique' => 0)
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
			'idApplication' => 1,
			'ApplicationDate' => 'Lorem ipsum dolor sit amet',
			'idStudent' => 1,
			'idJobPosting' => 1,
			'idApplicationStatus' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame'
		),
	);

}
