<?php
App::uses('Companymembershiptype', 'Model');

/**
 * Companymembershiptype Test Case
 *
 */
class CompanymembershiptypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companymembershiptype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Companymembershiptype = ClassRegistry::init('Companymembershiptype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companymembershiptype);

		parent::tearDown();
	}

}
