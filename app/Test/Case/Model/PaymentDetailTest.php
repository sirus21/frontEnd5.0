<?php
/* PaymentDetail Test cases generated on: 2011-12-02 11:52:15 : 1322826735*/
App::uses('PaymentDetail', 'Model');

/**
 * PaymentDetail Test Case
 *
 */
class PaymentDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.payment_detail', 'app.user', 'app.group', 'app.post', 'app.forgotton_password');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PaymentDetail = ClassRegistry::init('PaymentDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PaymentDetail);

		parent::tearDown();
	}

}
