<?php
App::uses('AppController', 'Controller','AuthComponent');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
    
     

function beforeFilter() {
   
     //  parent::beforeFilter();
      //$this->initDB(); 
      $this->Auth->allow('register');
      $this->Auth->allow('activate');
      $this->Auth->allow('logout');
      $this->Auth->allow('registrationMessage','resendemail','forgottonPassword', "resetpword");

      
      
     //print_r($this->  __sendEmail(array('name'=>'test email','id'=>"7"),'sign_up',"joeappleton@goodapple.co.uk"));
      
      
}

/**
 * sends out a email using a template 
 *
 * @param   array $templateVars   varibles to be set in the template
 * @param   string $emailTemplate the email template to be used for the email
 * @param   string  $to who we are sending the email to
 * @param   string $bccVars=null
 * 
 *
 * @return bool true if the email has sent 
 *
 */
 function __sendEmail($templateVars,$emailTemplate,$bcc="null",$to){
     
     
      
     $email = new CakeEmail();
     $email->config('gmailSmtp');
     $email->template($emailTemplate);
     $email->emailFormat('html');
     $email->subject($templateVars['subject']);
     $email->to($to);
     $email->bcc($bcc); 
     $email->viewVars($templateVars);
     return $email->send();
    


 }
 	





public function beforeSave() {
	

       $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
       
        return true;

}

function initDB() {
    $group = $this->User->Group;
    //Allow admins to everything
    $group->id = 4;
    $this->Acl->allow($group, 'controllers');

    //allow managers to posts and widgets
    $group->id = 5;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Posts');
    $this->Acl->allow($group, 'controllers/Widgets');

    //allow users to only add and edit on posts and widgets
    $group->id = 6;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group,'controllers/CallSessions/index');
  

    //we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
}



function login() {

      
      
    //$this->layout='front_end';  
     
     // print_r($this->Auth->user('active'));   
    if ($this->request->is('post')) {
     

	
	if ($this->Auth->login()) {
           
	                                        if($this->Auth->user('active') ) {
						           
							   print_r($this->Auth->redirect());
							   
							   $this->redirect(array('controller' => 'CallSessions', 'action' => 'index'));
							   //$this->redirect($this->Auth->redirect());
	                                        }
	                                        else
						   
						    $this->set('id',$this->Auth->user('id'));
					            $this->Auth->logout();							
						    $this->Session->setFlash('Your account is not yet active, please activate it by clicking on the link in the email
										            we sent you','flash_login');
						     
				
        } else {
            
	    $this->Session->setFlash('Your email or password was incorrect.');
       
        }
    }
   
  
}


function logout()
{
    	 
	 $this->Session->setFlash('Good-Bye');
	 $this->redirect($this->Auth->logout());
	 $this->Session->destroy(); 
}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * register 
 *
 * @return void
 */
	public function register() {
		
		
		
		if ($this->request->is('post')) {
			     
			$this->User->create();
			
			if(!empty( $this->request->data['User']['password']))
		        if ($this->User->save($this->request->data)) {
			     
			        $user =  $this->User->getUser($this->request->data['User']['email']);
				
			        
			        $code = 'http://' . env('SERVER_NAME') . '/users/activate/' . $user['User']['id'] . '/' . $this->User->getActivationHash();
				$this->__sendEmail(array( 'name'=>$this->request->data['User']['first_name'],
							                'code'=> $code,'subject'=>"Call Commission - Please activate your account"),'sign_up',$this->request->data['User']['email']); 
				
				
				$this->redirect(array('controller'=>'users','action'=>'registrationMessage',$this->request->data['User']['first_name'])); 
				
				//$this->Session->setFlash(__('Thanks for that,please check your inbox to active'));
				
				
				// $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		 
		 $groups = $this->User->Group->find('list');
		 $this->set(compact('groups'));
	}



/**
 * This is called if a user has not recived there activation email
 *@param int $userID
 *@return bool true if email has sent 
 * 
 */
public  function  resendemail($id=null)
{
    $this->User->id = $id;
    if($this->User->exists()){

	     $templateVars = array(); 
	     $templateVars['code'] = 'http://' . env('SERVER_NAME') . '/users/activate/' . $id. '/' . $this->User->getActivationHash();
	     $templateVars['name'] = $this->User->field("first_name");
	     $templateVars['subject'] = "Call Commission - Activation email resend"; 
             
	     
	     $this->__sendEmail($templateVars,'sign_up',null,$this->User->field("email"));
	     
	     //$this->Session->setFlash(__('An email has been sent please activate your account then log in .'));
             //$this->redirect('login');
    }
    
    
    
}



/**
 * Forgotton Password
 * 
 */
  function forgottonPassword()
  {
     
       
      
        if ($this->request->is('post')) {
	         
                     $user = $this->User->getUser($this->request->data['User']['username']);
		     $this ->User->id = $user['User']['id'];
	
		    if ($this->User->exists())
		    {
			    
                                 $templateVars = array();
				 $templateVars['code'] = 'http://' . env('SERVER_NAME') . '/users/resetpword/' .$this->User->id. '/' . $this->User->getActivationHash();
	                         $templateVars['name'] = $this->User->field("first_name");
				 $templateVars['subject'] = "Call Commission - Password reset request";
				 $this->__sendEmail($templateVars,'forgotton_pword_email',null,$this->User->field("email"));
		
	                         $this->User->ForgottonPassword->create();
				 $this->User->ForgottonPassword->save(array('user_id'=>$this->User->id)); 
				 $this->Session->setFlash(__('We found your email address and have sent you a password reset email.'));
			    
		    }
		    else
		    {
			
			$this->Session->setFlash(__('Oops, we dont recognise that email address.
							               Check it again to make sure you typed it
								       correctly or perhaps you registered with a different address.'));
			
		    }
		    
		      		        
                    
		          	 
	    
	}
       
    
  }


/**
 * Registration compleation page
 *
 * @param string $firstName
 * 
 */
 public function registrationMessage($firstName=null){
	
	      if(isset($firstName)){
                    $this ->set('name',$firstName);
		    return true;
	      }
           //   else
		
		//$this->redirect(array('action' => 'index'));
	      
 }

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
      }
	

/**
 * resets the user password
 *
 *  @param Int $user_id User.id to activate
 *  @param String $in_hash Incoming Activation Hash from the email
*/
public function resetpword($user_id = null, $in_hash = null)
{
	
	
	
	
	   // http://stage.goodapple.co.uk/users/resetpword/30/982e776a
	  $this->User->id = $user_id;  
	  if(empty($user_id)  &&  empty($in_hash))
	  {
	
	        $this->set('urlID','/'.$in_hash);
	        $this->set('urlCode','/',$in_hash); 
	    
	 }
         else
	 {
		$this->set('urlID','/'.$user_id);
	        $this->set('urlCode','/',$in_hash); 
	 }
	 
	 
    
	
	if ($this->request->is('post')  &&  $in_hash == $this->User->getActivationHash()) 
	{
            
             
		
		$this->User->set($this->request->data); 
	        $x = $this->User->getForgottonPasswordDate();
		
		if (empty($x)) {
		                        $this->Session->setFlash(__('Your password has not been updated as you have not recently requested a change,
								                    please click the forgotton password link if you still want to reset it'));
				        $this->redirect('login'); 				    
		 			
		}
	       
	        if($this->User->validates(array('fieldList' => array('password')))){
		                
				 	
				
					  
					 $this->Session->setFlash('Your password has been updated, please login with your new password');
					 $this->User->saveField('password',$this->request->data['User']['password']); 
					 $this->redirect('login');
		        
		
	       }
	       else
	       {
		                        $this->Session->setFlash(__('Please fix the below errors'));
		
		
	       }
	       
	          
	 
	}
    

}




/**
 * Activates a user account from an incoming link
 *
 *  @param Int $user_id User.id to activate
 *  @param String $in_hash Incoming Activation Hash from the email
*/
public function activate($user_id = null, $in_hash = null) {
	$this->User->id = $user_id;
	if ($this->User->exists() && ($in_hash == $this->User->getActivationHash()))
	{
		// Update the active flag in the database
		$this->User->saveField('active', 1);
		// Let the user know they can now log in!
		$this->Session->setFlash('Your account has been activated, please log in below');
		$this->redirect('login');
	}
 
	// Activation failed, render '/views/user/activate.ctp' which should tell the user.
}
	
	
	
}
