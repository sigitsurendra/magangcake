<?php
App::uses('Workexperience', 'Model');

/**
 * Workexperience Test Case
 *
 */
class WorkexperienceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.workexperience',
		'app.student',
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
		'app.jobcategory',
		'app.jobtype',
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
		$this->Workexperience = ClassRegistry::init('Workexperience');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Workexperience);

		parent::tearDown();
	}

}
