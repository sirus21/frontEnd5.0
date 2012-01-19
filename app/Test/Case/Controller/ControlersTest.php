<?php
/* Controlers Test cases generated on: 2012-01-19 10:27:45 : 1326968865*/
App::uses('Controlers', 'Controller');

/**
 * TestControlers *
 */
class TestControlers extends Controlers {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * Controlers Test Case
 *
 */
class ControlersTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Controlers = new TestControlers();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Controlers);

		parent::tearDown();
	}

}
