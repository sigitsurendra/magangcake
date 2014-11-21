<?php
App::uses('Studentexpertise', 'Model');

/**
 * Studentexpertise Test Case
 *
 */
class StudentexpertiseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.studentexpertise',
		'app.student',
		'app.expertise'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Studentexpertise = ClassRegistry::init('Studentexpertise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Studentexpertise);

		parent::tearDown();
	}

}
