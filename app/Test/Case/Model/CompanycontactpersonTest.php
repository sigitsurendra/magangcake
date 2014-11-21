<?php
App::uses('Companycontactperson', 'Model');

/**
 * Companycontactperson Test Case
 *
 */
class CompanycontactpersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companycontactperson',
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
		$this->Companycontactperson = ClassRegistry::init('Companycontactperson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companycontactperson);

		parent::tearDown();
	}

}
