<?php
/* ForgottonPassword Test cases generated on: 2011-11-18 11:39:03 : 1321616343*/
App::uses('ForgottonPassword', 'Model');

/**
 * ForgottonPassword Test Case
 *
 */
class ForgottonPasswordTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.forgotton_password', 'app.user', 'app.group', 'app.post');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ForgottonPassword = ClassRegistry::init('ForgottonPassword');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ForgottonPassword);

		parent::tearDown();
	}

}
