<?php
App::uses('Educationcontactperson', 'Model');

/**
 * Educationcontactperson Test Case
 *
 */
class EducationcontactpersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.educationcontactperson',
		'app.companyorganization'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Educationcontactperson = ClassRegistry::init('Educationcontactperson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Educationcontactperson);

		parent::tearDown();
	}

}
