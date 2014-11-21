<?php
App::uses('Userrole', 'Model');

/**
 * Userrole Test Case
 *
 */
class UserroleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.userrole',
		'app.user',
		'app.role',
		'app.educationcontactperson',
		'app.educationorganization',
		'app.educationcategory',
		'app.student',
		'app.companycontactperson',
		'app.company',
		'app.industrycategory',
		'app.city',
		'app.province',
		'app.country',
		'app.activationstatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Userrole = ClassRegistry::init('Userrole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Userrole);

		parent::tearDown();
	}

}
