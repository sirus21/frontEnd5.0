<?php
/* Call Fixture generated on: 2011-11-24 17:23:55 : 1322155435 */

/**
 * CallFixture
 *
 */
class CallFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 6, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'caller_phone_number' => array('type' => 'string', 'null' => false, 'default' => 'anonymous', 'length' => 250, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'call_start_time' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'collate' => NULL, 'comment' => ''),
		'convo_start_time' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00', 'collate' => NULL, 'comment' => ''),
		'call_end_time' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00', 'collate' => NULL, 'comment' => ''),
		'number_called' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'tropo_sesh' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'button_pressed' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 11, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'call_session_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'caller_phone_number' => 'Lorem ipsum dolor sit amet',
			'call_start_time' => 1322155435,
			'convo_start_time' => 1322155435,
			'call_end_time' => 1322155435,
			'number_called' => 'Lorem ipsum do',
			'tropo_sesh' => 'Lorem ipsum dolor sit amet',
			'button_pressed' => 'Lorem ips',
			'call_session_id' => 1
		),
	);
}
