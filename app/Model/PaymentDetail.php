<?php
App::uses('AppModel', 'Model');
/**
 * PaymentDetail Model
 *
 * @property User $User
 */
class PaymentDetail extends AppModel {


/**
 * Gets the user payments details
 * @param  string user id
 * @return  user details
 */

public function  getUser($id=null){
    
       return   $this->find('all',  array('conditions'=>array('user_id' => $id)));
      
}


//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
