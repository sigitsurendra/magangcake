<?php
/**
 * NewsFixture
 *
 */
class NewsFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idNews' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'timestamp', 'null' => false),
		'LastUpdateDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'CreatedBy' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LastUpdateBy' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idActivationStatus' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Pinned' => array('type' => 'string', 'null' => false, 'default' => 'N', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idNewsCategory' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idNews', 'unique' => 1),
			'fk_News_User1_idx' => array('column' => 'CreatedBy', 'unique' => 0),
			'fk_News_User2_idx' => array('column' => 'LastUpdateBy', 'unique' => 0),
			'fk_News_ActivationStatus1_idx' => array('column' => 'idActivationStatus', 'unique' => 0),
			'fk_News_NewsCategory1_idx' => array('column' => 'idNewsCategory', 'unique' => 0)
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
			'idNews' => 1,
			'Content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'CreatedDate' => 1415181751,
			'LastUpdateDate' => 1415181751,
			'CreatedBy' => 1,
			'LastUpdateBy' => 1,
			'idActivationStatus' => 1,
			'Visible' => 'Lorem ipsum dolor sit ame',
			'Pinned' => 'Lorem ipsum dolor sit ame',
			'idNewsCategory' => 1
		),
	);

}
