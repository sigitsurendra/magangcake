<?php
App::uses('Student', 'Model');

/**
 * Student Test Case
 *
 */
class StudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student',
		'app.workexperience',
		'app.userrole',
		'app.user',
		'app.role',
		'app.educationcontactperson',
		'app.educationorganization',
		'app.educationcategory',
		'app.companycontactperson',
		'app.company',
		'app.industrycategory',
		'app.city',
		'app.province',
		'app.country',
		'app.activationstatus',
		'app.application',
		'app.jobposting',
		'app.applicationstatus',
		'app.organizationexperiences',
		'app.studentorganization',
		'app.studentexpertise',
		'app.expertise'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Student = ClassRegistry::init('Student');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Student);

		parent::tearDown();
	}

}
