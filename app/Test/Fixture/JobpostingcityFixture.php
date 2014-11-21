<?php
/**
 * JobpostingcityFixture
 *
 */
class JobpostingcityFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jobpostingcity';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idJobPosting' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idCity' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idJobPosting', 'idCity'), 'unique' => 1),
			'fk_JobPostingCity_City1_idx' => array('column' => 'idCity', 'unique' => 0)
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
			'idCity' => 1
		),
	);

}
