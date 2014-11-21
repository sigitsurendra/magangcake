<?php
App::uses('Educationorganization', 'Model');

/**
 * Educationorganization Test Case
 *
 */
class EducationorganizationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Educationorganization = ClassRegistry::init('Educationorganization');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Educationorganization);

		parent::tearDown();
	}

}
