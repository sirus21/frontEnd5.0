<?php
App::uses('AppModel', 'Model');
/**
 * Camp Model
 *
 * @property BusinessHour $BusinessHour
 */
class Camp extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BusinessHour' => array(
			'className' => 'BusinessHour',
			'foreignKey' => 'camp_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
                'CallSession' => array(
			'className' => 'CallSession',
			'foreignKey' => 'camp_id',
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
