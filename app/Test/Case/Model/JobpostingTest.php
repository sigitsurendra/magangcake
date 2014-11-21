<?php
App::uses('Jobposting', 'Model');

/**
 * Jobposting Test Case
 *
 */
class JobpostingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Jobposting = ClassRegistry::init('Jobposting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobposting);

		parent::tearDown();
	}

}
