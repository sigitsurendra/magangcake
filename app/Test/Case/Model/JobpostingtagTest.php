<?php
App::uses('Jobpostingtag', 'Model');

/**
 * Jobpostingtag Test Case
 *
 */
class JobpostingtagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobpostingtag',
		'app.tag',
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
		$this->Jobpostingtag = ClassRegistry::init('Jobpostingtag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobpostingtag);

		parent::tearDown();
	}

}
