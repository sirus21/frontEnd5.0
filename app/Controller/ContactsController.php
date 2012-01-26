
<?php 
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applications Controller
 *
 * @property Application $Application
 */
class ContactsController extends AppController {
    
    
    /**
     * Sends a contact message email to us
     */
    
    
    function add(){


           if ($this->request->is('post')) {
                   
                          //$this->request->data['User']['first_name'];
                         $templateVars['name'] =      $this->request->data['Contact']['first_name'] . " ".         $this->request->data['Contact']['last_name'];
	                 $templateVars['company'] =     $this->request->data['Contact']['company_name']; 
	                 $templateVars['message'] = $this->request->data['Contact']['message'];
                         $templateVars['email']= $this->request->data['Contact']['email'];
                         $templateVars['number']= $this->request->data['Contact']['contact_number'];
                         
                         
                             $email = new CakeEmail();
                            $email->config('gmailSmtp');
                            $email->template('qp_contact');
                            $email->emailFormat('html');
                 
                             $email->subject('QP - New Contact Request');
                             $email->to('joeappleton@goodapple.co.uk');
                             $email->bcc(/*$bcc*/); 
                             $email->viewVars($templateVars);
                             if ($email->send())
                            {
                                $this->Session->setFlash('Thanks for registering,please check your inbox to learn how to log in','flash_good');
				$this->redirect(array('controller'=>'pages','action'=>'home')); 
                            }
                            else
                            {
                                $this->Session->setFlash('Whoops there was a problem, we did not get your message please call us or email
                                                                        joeappleton@goodapple.co.uk');
                                
                            }
               
            
           }
           
           
           
    
      
        
        
    }
    
    
    
    
    
    
    
}


?> 