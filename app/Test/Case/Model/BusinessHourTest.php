<?php
/* BusinessHour Test cases generated on: 2011-11-24 17:30:59 : 1322155859*/
App::uses('BusinessHour', 'Model');

/**
 * BusinessHour Test Case
 *
 */
class BusinessHourTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.business_hour', 'app.camp', 'app.call_session', 'app.call');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->BusinessHour = ClassRegistry::init('BusinessHour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessHour);

		parent::tearDown();
	}

}
