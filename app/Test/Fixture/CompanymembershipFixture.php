<?php
/**
 * CompanymembershipFixture
 *
 */
class CompanymembershipFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'companymembership';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idCompanyMembership' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idMembershipType' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idCompany' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'StartDate' => array('type' => 'date', 'null' => false, 'default' => null),
		'EndDate' => array('type' => 'date', 'null' => true, 'default' => null),
		'idActivationStatus' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'IsPaid' => array('type' => 'string', 'null' => false, 'default' => 'N', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PaymentAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'PaymentDate' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idCompanyMembership', 'unique' => 1),
			'fk_CompanyMembership_MembershipType1_idx' => array('column' => 'idMembershipType', 'unique' => 0),
			'fk_CompanyMembership_Company1_idx' => array('column' => 'idCompany', 'unique' => 0),
			'fk_CompanyMembership_ActivationStatus1_idx' => array('column' => 'idActivationStatus', 'unique' => 0)
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
			'idCompanyMembership' => 1,
			'idMembershipType' => 1,
			'idCompany' => 1,
			'StartDate' => '2014-10-22',
			'EndDate' => '2014-10-22',
			'idActivationStatus' => 1,
			'IsPaid' => 'Lorem ipsum dolor sit ame',
			'PaymentAmount' => 1,
			'PaymentDate' => '2014-10-22'
		),
	);

}
