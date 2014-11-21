<?php
App::uses('Companymembership', 'Model');

/**
 * Companymembership Test Case
 *
 */
class CompanymembershipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companymembership',
		'app.membershiptype',
		'app.company',
		'app.industrycategory',
		'app.city',
		'app.province',
		'app.country',
		'app.activationstatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Companymembership = ClassRegistry::init('Companymembership');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companymembership);

		parent::tearDown();
	}

}
