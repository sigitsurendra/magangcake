<?php
App::uses('Industrycategory', 'Model');

/**
 * Industrycategory Test Case
 *
 */
class IndustrycategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.industrycategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Industrycategory = ClassRegistry::init('Industrycategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Industrycategory);

		parent::tearDown();
	}

}
