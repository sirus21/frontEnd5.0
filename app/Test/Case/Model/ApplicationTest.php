<?php
/* Application Test cases generated on: 2012-01-19 09:58:12 : 1326967092*/
App::uses('Application', 'Model');

/**
 * Application Test Case
 *
 */
class ApplicationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.application', 'app.product');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Application = ClassRegistry::init('Application');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Application);

		parent::tearDown();
	}

}
