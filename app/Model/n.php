<?php
App::uses('AppModel', 'Model');
/**
 * n Model
 *
 * @property Camp $Camp
 */
class n extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'business_hours';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Camp' => array(
			'className' => 'Camp',
			'foreignKey' => 'camp_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
