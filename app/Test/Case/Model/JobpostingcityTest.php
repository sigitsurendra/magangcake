<?php
App::uses('Jobpostingcity', 'Model');

/**
 * Jobpostingcity Test Case
 *
 */
class JobpostingcityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobpostingcity',
		'app.jobposting',
		'app.jobcategory',
		'app.jobtype',
		'app.city',
		'app.province',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jobpostingcity = ClassRegistry::init('Jobpostingcity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobpostingcity);

		parent::tearDown();
	}

}
