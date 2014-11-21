<?php
App::uses('Organizationexperience', 'Model');

/**
 * Organizationexperience Test Case
 *
 */
class OrganizationexperienceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organizationexperience',
		'app.student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Organizationexperience = ClassRegistry::init('Organizationexperience');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Organizationexperience);

		parent::tearDown();
	}

}
