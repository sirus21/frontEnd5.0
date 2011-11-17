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
    parent::beforeFilter();
      $this->Auth->allow('register');
      $this->Auth->allow('activate');
      $this->Auth->allow('registrationMessage');
     //print_r($this->  __sendEmail(array('name'=>'test email','id'=>"7"),'sign_up',"joeappleton@goodapple.co.uk"));
      
      
}

/**
 * sends out a email using a template 
 *
 * @param  array $templateVars   varibles to be set in the template
 * @param string $emailTemplate the email template to be used for the email
 * @param srting $to who we are sending the email to
 *
 * @return bool true if the email has sent 
 *
 */
 function __sendEmail($templateVars,$emailTemplate,$to){
     
    
    /* set activation code for user */  
    
     print_r($templateVars);
     $templateVars['code'] = 'http://' . env('SERVER_NAME') . '/users/activate/' . $templateVars['id']. '/' . $this->User->getActivationHash();
    
      
     $email = new CakeEmail();
     $email->config('gmailSmtp');
     $email->template('sign_up');
     $email->emailFormat('html'); 
     $email->to('joeappleton@goodapple.co.uk'); 
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
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    //allow managers to posts and widgets
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Posts');
    $this->Acl->allow($group, 'controllers/Widgets');

    //allow users to only add and edit on posts and widgets
    $group->id = 3;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Posts/add');
    $this->Acl->allow($group, 'controllers/Posts/edit');
    $this->Acl->allow($group, 'controllers/Widgets/add');
    $this->Acl->allow($group, 'controllers/Widgets/edit');
    //we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
}



function login() {
   
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash('Your username or password was incorrect.');
        }
    }
   
  
}


function logout()
{
    	 
	 $this->Session->setFlash('Good-Bye');
	 $this->redirect($this->Auth->logout());
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
		
		$this->redirect(array('controller'=>'users','action'=>'registrationMessage',"Joe")); 
		
		if ($this->request->is('post')) {
			     
			$this->User->create();
			
			if(!empty( $this->request->data['User']['password']))
		        if ($this->User->save($this->request->data)) {
			
			        
				$this->Session->setFlash(__('Thanks for that,please check your inbox to active'));
				//$this->__sendEmail(array('name'=>$this->request->data['User']['full_name'],'id'=>$this->User->getLastInsertID()),'sign_up' ,'joeappleton18@goodapple.co.uk'); 
				
				// $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		 
		 $groups = $this->User->Group->find('list');
		 $this->set(compact('groups'));
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
