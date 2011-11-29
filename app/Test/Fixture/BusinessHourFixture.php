<?php
/* BusinessHour Fixture generated on: 2011-11-24 17:30:59 : 1322155859 */

/**
 * BusinessHourFixture
 *
 */
class BusinessHourFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'camp_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'day' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'open_time' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'close_time' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
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
			'camp_id' => 1,
			'day' => 1,
			'open_time' => '17:30:59',
			'close_time' => '17:30:59'
		),
	);
}
