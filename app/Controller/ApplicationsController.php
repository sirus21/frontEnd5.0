<?php
App::uses('AppController', 'Controller');
/**
 * Applications Controller
 *
 * @property Application $Application
 */
class ApplicationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Application->recursive = 0;
		$this->set('applications', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		$this->set('application', $this->Application->read(null, $id));
	}
/**
 * Returns the partner name given a string
 * @id string the partners id
 * @return string the partners name 
 */
  function  __getPartnerName($id){
	
	switch($id){
		
	case  '1':
		    return "stjames";
			     
		
	}
	
}

/**
 * add method
 *
 * @return void
 */
	public function add($partnerID= null,$productid=null) {
		
		
		
		$partner =  $this->__getPartnerName($partnerID);
		
		if ($this->request->is('post')) {
			$this->Application->create();
			if ($this->Application->validates()) {
			
				$this->Session->setFlash('Thanks we have your information and will be in touch','flash_bad');
			        $this->redirect(array('controller' => 'pages' , 'action' => 'display',$partner));
			} else {
				$this->Session->setFlash('There were errors in your form please correct them and resubmit','flash_bad');
							 
							 }
		}
		$products = $this->Application->Product->find('list');
			
		
		
		
		
		$this->set('partner',$partner); 
		$this->set('productid',$productid);
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Application->read(null, $id);
		}
		$products = $this->Application->Product->find('list');
		$this->set(compact('products'));
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
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('Application deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Application was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
