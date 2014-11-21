<?php
/**
 * JobexpertiseFixture
 *
 */
class JobexpertiseFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jobexpertise';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idJobPosting' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idExpertise' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'fk_JobExpertise_JobPosting1_idx' => array('column' => 'idJobPosting', 'unique' => 0),
			'fk_JobExpertise_Expertise1_idx' => array('column' => 'idExpertise', 'unique' => 0)
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
			'idJobPosting' => 1,
			'idExpertise' => 1
		),
	);

}
