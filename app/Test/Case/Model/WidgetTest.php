<?php
/* Widget Test cases generated on: 2011-11-10 14:59:31 : 1320937171*/
App::uses('Widget', 'Model');

/**
 * Widget Test Case
 *
 */
class WidgetTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.widget');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Widget = ClassRegistry::init('Widget');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Widget);

		parent::tearDown();
	}

}
