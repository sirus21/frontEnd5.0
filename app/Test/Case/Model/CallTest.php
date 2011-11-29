<?php
/* Call Test cases generated on: 2011-11-24 17:23:56 : 1322155436*/
App::uses('Call', 'Model');

/**
 * Call Test Case
 *
 */
class CallTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.call', 'app.call_session', 'app.camp', 'app.business_hour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Call = ClassRegistry::init('Call');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Call);

		parent::tearDown();
	}

}
