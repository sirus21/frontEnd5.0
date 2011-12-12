<?php
App::uses('AppModel', 'Model');
/**
 * Call Model
 *
 * @property CallSession $CallSession
 */
class Call extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CallSession' => array(
			'className' => 'CallSession',
			'foreignKey' => 'call_session_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
