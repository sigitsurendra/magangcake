<?php
/**
 * WorkexperienceFixture
 *
 */
class WorkexperienceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idWorkExperiences' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Company' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'StartDate' => array('type' => 'date', 'null' => false, 'default' => null),
		'EndDate' => array('type' => 'date', 'null' => false, 'default' => null),
		'Description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ReferenceName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ReferencePhone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SupportFilePath' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idStudent' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idWorkExperiences', 'unique' => 1),
			'fk_WorkExperiences_Student1_idx' => array('column' => 'idStudent', 'unique' => 0)
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
			'idWorkExperiences' => 1,
			'Title' => 'Lorem ipsum dolor sit amet',
			'Company' => 'Lorem ipsum dolor sit amet',
			'StartDate' => '2014-11-05',
			'EndDate' => '2014-11-05',
			'Description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ReferenceName' => 'Lorem ipsum dolor sit amet',
			'ReferencePhone' => 'Lorem ipsum do',
			'SupportFilePath' => 'Lorem ipsum dolor sit amet',
			'idStudent' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame'
		),
	);

}
