<?php
App::uses('Educationcategory', 'Model');

/**
 * Educationcategory Test Case
 *
 */
class EducationcategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.educationcategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Educationcategory = ClassRegistry::init('Educationcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Educationcategory);

		parent::tearDown();
	}

}
