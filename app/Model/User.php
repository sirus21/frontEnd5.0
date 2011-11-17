<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Group $Group
 * @property Post $Post
 */
class User extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
      public $name = 'User';
      // public $belongsTo = array('Group');
      public $actsAs = array('Acl' => array('type' => 'requester'));
    
     
     
     
     
     
     
      public function beforeSave() {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
      }

      /**
	 * creates an activation hash for the current user.
	 *
	 *	@param Void
	 *	@return String activation hash.
	*/
	
	function getActivationHash()
	{
		if (!isset($this->id)) {
			return false;
		}
		return substr(Security::hash(Configure::read('Security.salt') . $this->field('created') . date('Ymd')), 0, 8);
	}
      
      function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }


     /**
      * Validates that 2 passwords match
      * @param array $data post data that is being validated 
      * 
      */
    
       function checkPasswordsMatch($data)
       
       {
        
         // check there is some value in data fo us to validate
         // debug($this->data['User']['password'], $showHTML = true, $showFrom = true) ; 
         if (!isset($this->data['User']['password2']))
                                       return true;
       
        return $this->data['User']['password'] == $this->data['User']['password2'];
         
        
        
       }
  
        public $validate = array(
		
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		        'minlength' => array(
                                 
                                 'rule' => array('minLength',5),
                                 'message' => 'Passwords must be at least 5 characters long.'
                                 
                        ),
                        
                        'checkMatch' => array(
                             'rule' => array('checkPasswordsMatch'),
                             'message' => 'Passwords do no match'
                       )           
                        
                ),
                'password2' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		)
                        
                ),
                 
                
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                
                'full_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                
                'contact_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		
                
                
                
                ),
                
                       'email' => array(
			'notempty' => array(
			'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		       
                
                
                )
  );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
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
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
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
