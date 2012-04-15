<?php
App::uses('Author', 'Model');

/**
 * Author Test Case
 *
 */
class AuthorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.author', 'app.conference');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Author = ClassRegistry::init('Author');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Author);

		parent::tearDown();
	}

}
