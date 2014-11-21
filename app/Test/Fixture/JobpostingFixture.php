<?php
/**
 * JobpostingFixture
 *
 */
class JobpostingFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jobposting';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idJobPosting' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Requirements' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'StartDatePosting' => array('type' => 'date', 'null' => false, 'default' => null),
		'EndDatePosting' => array('type' => 'date', 'null' => false, 'default' => null),
		'VacancyAvailable' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false),
		'DurationDays' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'StartDateWork' => array('type' => 'date', 'null' => true, 'default' => null),
		'Sallary' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'idJobCategory' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idActivationStatus' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idJobType' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'LastUpdateDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'CreatedBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LastUpdateBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idJobPosting', 'unique' => 1),
			'fk_JobPosting_JobCategory_idx' => array('column' => 'idJobCategory', 'unique' => 0),
			'fk_JobPosting_ActivationStatus1_idx' => array('column' => 'idActivationStatus', 'unique' => 0),
			'fk_JobPosting_User1_idx' => array('column' => 'CreatedBy', 'unique' => 0),
			'fk_JobPosting_User2_idx' => array('column' => 'LastUpdateBy', 'unique' => 0),
			'fk_JobPosting_JobType1_idx' => array('column' => 'idJobType', 'unique' => 0)
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
			'Title' => 'Lorem ipsum dolor sit amet',
			'Description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'Requirements' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'StartDatePosting' => '2014-11-05',
			'EndDatePosting' => '2014-11-05',
			'VacancyAvailable' => 1,
			'DurationDays' => 1,
			'StartDateWork' => '2014-11-05',
			'Sallary' => 1,
			'idJobCategory' => 1,
			'idActivationStatus' => 1,
			'idJobType' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame',
			'CreatedDate' => 1415181033,
			'LastUpdateDate' => 1415181033,
			'CreatedBy' => 1,
			'LastUpdateBy' => 1
		),
	);

}
