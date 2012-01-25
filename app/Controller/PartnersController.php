<?php
App::uses('AppController', 'Controller');
/**
 * Calls Controller
 *
 * @property Call $Call
 */
class  PartnersController extends AppController {


	public function view($partnername =null) {
	        // set up the session info for our filtering if it is empty		
            $this->layout='partnerpage';
            $this->set("partnername",partnername);
		
	}

}



?> 