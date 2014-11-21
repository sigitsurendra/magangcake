<?php
App::uses('Studentorganization', 'Model');

/**
 * Studentorganization Test Case
 *
 */
class StudentorganizationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.studentorganization',
		'app.student',
		'app.educationorganization',
		'app.educationcategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Studentorganization = ClassRegistry::init('Studentorganization');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Studentorganization);

		parent::tearDown();
	}

}
