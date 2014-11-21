<?php
App::uses('Activationstatus', 'Model');

/**
 * Activationstatus Test Case
 *
 */
class ActivationstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activationstatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Activationstatus = ClassRegistry::init('Activationstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Activationstatus);

		parent::tearDown();
	}

}
