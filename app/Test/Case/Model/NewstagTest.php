<?php
App::uses('Newstag', 'Model');

/**
 * Newstag Test Case
 *
 */
class NewstagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.newstag',
		'app.tag',
		'app.news',
		'app.newscategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Newstag = ClassRegistry::init('Newstag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Newstag);

		parent::tearDown();
	}

}
