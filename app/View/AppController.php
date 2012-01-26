<?php

class AppController extends Controller {
    public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session',
        'RequestHandler'
    );
    
    public $helpers = array('Html', 'Form', 'Session');
    function beforeFilter() {
    
        //config pagenator      
        //Configure AuthComponent
        $this->Auth->allow('*');
        $this->Auth->actionPath = 'controllers';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
    }



         

}











?> 