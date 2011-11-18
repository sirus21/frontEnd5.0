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
        
        $this->data['User']['username'] = $this->data['User']['email'];    
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        
        return true;
      }

      /**
	 * creates an activation hash for the current user.
	 *
	 *	@param Void
	 *	@return String activation hash.
	*/
	
	public function getActivationHash()
	{
		if (!isset($this->id)) {
			return false;
		}
		return substr(Security::hash(Configure::read('Security.salt') . $this->field('created') . date('Ymd')), 0, 8);
	}
	
      /**
       * returns the users email address
       * @param void
       * @return string users email address
       */
      
      public function getEmail()
      {
	
	    if(!isset($this->id)){
	      
	      return false;
	    }
	    return $this->field('email'); 
	    
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
      * @return bool true if passwords match 
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
       
        /**
      * Validates that 2 emails match
      * @param array $data post data that is being validated
      * @return bool true if emails match 
      * 
      */
        function checkEmailsMatch($data){
                
                if (!isset($this->data['User']['email2']))
                                             return true;
                return $this->data['User']['email'] ==  $this->data['User']['email2'];                             
           
        }
       
  
  
        public $validate = array(
		
                'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		)
                ),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		        'minlength' => array(
                                 
                                 'rule' => array('minLength',6),
                                 'message' => 'Passwords must be at least 5 characters long.'
                                 
                        ),
                        
                        
                        'checkMatch' => array(
                             'rule' => array('checkPasswordsMatch'),
                             'message' => 'Passwords do no match'
                       ),           
                      
                      'oneNumber'=> array(
                         'rule'=> '/[0-9]+/',
                         'message'=> 'Passwords must containe at least one number'
                        )
               
               
                ),
                'password2' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		)
                        
                ),
                 
                
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                
                'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                
                   'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                
                
                'contact_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		
                
                
                
                ),
                
                    'company_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		
                
                
                
                ),
                
                    
		       'email' => array(
			'notempty' => array(
			'rule' => array('notempty'),
				'message' => 'This is required',
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
	    
                        'checkMatch' => array(
                             'rule' => array('checkEmailsMatch'),
                             'message' => 'Emails do not match'
                       ),
                        
                        'isEmail' =>  array(
                             'rule' => array('email'),
                             'message' => 'Please enter a valid email address'
                        ),
                    
		    /* lets remove this to help with testing
		        'isUnique' =>  array(
                             'rule' => array('isUnique'),
                             'message' => 'This email has already been used'
                        ),
                        
		    */     
                       
                    
                    
                    
                    
                    ),
                       'email2' => array(
			'notempty' => array(
			'rule' => array('notempty'),
			'message' => 'This is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
                        
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
