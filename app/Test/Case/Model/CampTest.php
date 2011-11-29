<?php
/* Camp Test cases generated on: 2011-11-24 17:16:06 : 1322154966*/
App::uses('Camp', 'Model');

/**
 * Camp Test Case
 *
 */
class CampTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.camp', 'app.business_hour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Camp = ClassRegistry::init('Camp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Camp);

		parent::tearDown();
	}

}
