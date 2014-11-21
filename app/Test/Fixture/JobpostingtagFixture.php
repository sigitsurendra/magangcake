<?php
/**
 * JobpostingtagFixture
 *
 */
class JobpostingtagFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jobpostingtag';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTag' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idJobPosting' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTag', 'idJobPosting'), 'unique' => 1),
			'fk_JobPostingTag_Tag1_idx' => array('column' => 'idTag', 'unique' => 0),
			'fk_JobPostingTag_JobPosting1_idx' => array('column' => 'idJobPosting', 'unique' => 0)
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
			'idTag' => 1,
			'idJobPosting' => 1
		),
	);

}
