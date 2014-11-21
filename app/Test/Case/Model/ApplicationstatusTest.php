<?php
App::uses('Applicationstatus', 'Model');

/**
 * Applicationstatus Test Case
 *
 */
class ApplicationstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.applicationstatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Applicationstatus = ClassRegistry::init('Applicationstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Applicationstatus);

		parent::tearDown();
	}

}
