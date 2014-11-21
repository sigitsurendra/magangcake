<?php
App::uses('Jobexpertise', 'Model');

/**
 * Jobexpertise Test Case
 *
 */
class JobexpertiseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobexpertise',
		'app.expertise',
		'app.jobposting',
		'app.jobcategory',
		'app.jobtype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jobexpertise = ClassRegistry::init('Jobexpertise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobexpertise);

		parent::tearDown();
	}

}
