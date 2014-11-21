<?php
App::uses('Newscategory', 'Model');

/**
 * Newscategory Test Case
 *
 */
class NewscategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.newscategory',
		'app.news'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Newscategory = ClassRegistry::init('Newscategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Newscategory);

		parent::tearDown();
	}

}
