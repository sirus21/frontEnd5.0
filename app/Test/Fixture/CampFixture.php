<?php
/* Camp Fixture generated on: 2011-11-24 17:16:06 : 1322154966 */

/**
 * CampFixture
 *
 */
class CampFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'merchant_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'camp_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'camp_description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'payout' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'talk_time' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'forward_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
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
			'merchant_name' => 'Lorem ips',
			'camp_name' => 'Lor',
			'camp_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'payout' => 1,
			'talk_time' => 1,
			'created' => '17:16:06',
			'modified' => '17:16:06',
			'forward_number' => 'Lorem ipsum dolor '
		),
	);
}
