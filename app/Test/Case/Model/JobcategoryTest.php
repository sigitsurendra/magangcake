<?php
App::uses('Jobcategory', 'Model');

/**
 * Jobcategory Test Case
 *
 */
class JobcategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobcategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jobcategory = ClassRegistry::init('Jobcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobcategory);

		parent::tearDown();
	}

}
