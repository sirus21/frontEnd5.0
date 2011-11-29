<?php
App::uses('AppModel', 'Model');
/**
 * CallSession Model
 *
 * @property Camp $Camp
 * @property Call $Call
 */
class CallSession extends AppModel {

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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Call' => array(
			'className' => 'Call',
			'foreignKey' => 'call_session_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
