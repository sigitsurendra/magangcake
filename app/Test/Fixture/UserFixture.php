<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idUser' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'UserName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 80, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LastLoginDate' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'LoginAttempt' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'idActivationStatus' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idUser', 'unique' => 1),
			'UserName_UNIQUE' => array('column' => 'UserName', 'unique' => 1),
			'fk_User_ActivationStatus1_idx' => array('column' => 'idActivationStatus', 'unique' => 0)
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
			'UserName' => 'Lorem ipsum dolor sit amet',
			'Password' => 'Lorem ipsum dolor sit amet',
			'LastLoginDate' => 1415182228,
			'LoginAttempt' => 1,
			'idActivationStatus' => 1
		),
	);

}
