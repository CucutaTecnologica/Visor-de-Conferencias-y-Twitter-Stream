<?php
App::uses('Conference', 'Model');

/**
 * Conference Test Case
 *
 */
class ConferenceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.conference', 'app.event', 'app.author');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Conference = ClassRegistry::init('Conference');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conference);

		parent::tearDown();
	}

}
