<?php
/* CallSession Test cases generated on: 2011-12-02 10:08:01 : 1322820481*/
App::uses('CallSession', 'Model');
App::import('Core', 'Controller');
/**
 * CallSession Test Case
 *
 */
class CallSessionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.call_session', 'app.camp', /*'app.business_hour',*/'app.call');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CallSession = ClassRegistry::init('CallSession');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CallSession);

		parent::tearDown();
	}


     function testgetPaidLeads(){
	 $result = $this->CallSession->getPaidLeads();
	 $expected = array(
		   array(
			'id' => '2',
			'created' => '2011-11-30 16:00:00',
			'caller_number' => '2147483647',
			'number_called' => '08450951557',
			'camp_id' => '1',
			'user_id' => '1',
			'source' => 'phone',
			'paid' => '1'
		),
		array(
			'id' => '4',
			'created' => '2011-11-30 12:00:00',
			'caller_number' => '2147483647',
			'number_called' => '08450951557',
			'camp_id' => '1',
			'user_id' => '1',
			'source' => 'phone',
			'paid' => '1'
		),   
		
		array(
			'id' => '8',
			'created' => '0000-00-00 00:00:00',
			'caller_number' => '2147483647',
			'number_called' => '08450951557',
			'camp_id' => '1',
			'user_id' => '1',
			'source' => 'phone',
			'paid' => '1'
		),
		
		array(
			'id' => '9',
			'created' => '0000-00-00 00:00:00',
			'caller_number' => '2147483647',
			'number_called' => '08450951557',
			'camp_id' => '1',
			'user_id' => '1',
			'source' => 'phone',
			'paid' => '1'
		),
		array(
			'id' => '10',
			'created' => '0000-00-00 00:00:00',
			'caller_number' => '2147483647',
			'number_called' => '08450951557',
			'camp_id' => '1',
			'user_id' => '1',
			'source' => 'phone',
			'paid' => '1'
		),
	 ); 
	
          $this->assertEquals($expected, $result);
    
    
     }


}




