<?php

class Contact extends AppModel{
    
    // tell cake that we dont need to use a table
    
    var $useTable = false;
    var $_schema = array(
         'first_name'  =>array('type'=>'string', 'length'=>100),
         'last_name'  =>array('type'=>'string', 'length'=>100),
         'company_name'  =>array('type'=>'string', 'length'=>100),
         'email'  =>array('type'=>'string', 'length'=>100),
         'contact_number'  =>array('type'=>'string', 'length'=>100),
         'message' => array('type'=>'string', 'length'=>500),
         );
    
}




?> 