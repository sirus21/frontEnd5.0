<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');
App::uses('Twitter', 'Model');




/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {


public function beforeFilter(){
	
	parent::beforeFilter();
	$this->Auth->allow('*');
	
	
	
}




/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session','Time');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display($partner=null) {
		
		$this->loadModel('Twitter'); 
                $x = $this->Twitter->find();
		
		$this->set('twits',$x);
		
	         
		 //print_r($x); 
		
		$path = func_get_args();
                $url =  Router::url($this->here, true);
	        if(preg_match('/page/',$url)){
		  
		  $path[0] = ($path[0] == "home"?"":$path[0] );
		  
		  $this->redirect("http://www.qualitypartner.co.uk/".$path[0],404);
		  
	       }
	       
	       
		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		 if($page !="home" && $page!="howitworks" && $page!="whyitworks" && $page!="vetting"
		    && $page!="terms"  && $page!="aboutus" && $page!="services" && $page!="disclaimer" && $page!="privacy") $this->layout = "partnerpagedefault";
		$this->render(implode('/', $path));
		
	}
}
