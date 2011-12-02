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
 *    Gets the paid leads for diplay
 *    @return array a list of all the paid leads that we have in our database
 */
  public function  getPaidLeads(){
                 
        $this->find('all',  array('conditions'=>array('paid' => '1')));
                           
  }


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
