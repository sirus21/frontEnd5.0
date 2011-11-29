<?php
App::uses('AppModel', 'Model');
/**
 * BusinessHour Model
 *
 * @property Camp $Camp
 */
class BusinessHour extends AppModel {

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
