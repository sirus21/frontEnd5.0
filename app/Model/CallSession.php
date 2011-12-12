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
  public function  getPaidLeads($fields=null){
                 
     
      return   $this->find('all',  array('conditions'=>array('paid' => '1')),$fields);
      
                           
  }


/**
 * Gets the number of paid calls
 * @param $userID
 * @return int the number of paid leads
 * 
 * */
 
  public function getPaidLeadCount($userID){
                                            

                                 
                                 
                                       
                             $result =   $this->find('all',array(
                                'fields' => array('SUM(Camp.payout) as total'),
                                'conditions' => array( 'CallSession.paid'=>'1','CallSession.user_id'=>$userID,
								                                   'CallSession.created >='=>CakeSession::read('filter.startDate'),
				 								   'CallSession.created <'=>CakeSession::read('filter.endDate')
							                                       	)
                                ));
		    
                   
                             
                            $result = (empty($result['0']['0']['total'] ) ? "0" : $result['0']['0']['total']);  
		     	
                            return $result; 
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
