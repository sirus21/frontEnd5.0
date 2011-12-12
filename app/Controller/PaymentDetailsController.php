<?php
App::uses('AppController', 'Controller');
/**
 * PaymentDetails Controller
 *
 * @property PaymentDetail $PaymentDetail
 */
class PaymentDetailsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PaymentDetail->recursive = 0;
		$this->set('paymentDetails', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PaymentDetail->id = $id;
		
		
		if (!$this->PaymentDetail->exists()) {
			throw new NotFoundException(__('Invalid payment detail'));
		}
		$this->set('paymentDetail', $this->PaymentDetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		
		if ($this->request->is('post')) {
			$this->PaymentDetail->create();
		
			$this->PaymentDetail->set('user_id',$this->Auth->user('id'));    
			
			if ($this->PaymentDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The payment detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment detail could not be saved. Please, try again.'));
			}
		}
		$users = $this->PaymentDetail->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
			
		 
		$x =  $this->PaymentDetail->getUser($this->Auth->user('id')); 	
		$this->PaymentDetail->id =  $x['0']['PaymentDetail']['id']; 
		
		
		if (!$this->PaymentDetail->exists()) {
			  $this->redirect(array('action'=>'add')); 
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PaymentDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The payment detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment detail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PaymentDetail->read(null, $id);
		}
		$users = $this->PaymentDetail->User->find('list');
	 
	 
	  	$this->set(compact('users'));
	  	
		
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
		$this->PaymentDetail->id = $id;
		if (!$this->PaymentDetail->exists()) {
			throw new NotFoundException(__('Invalid payment detail'));
		}
		if ($this->PaymentDetail->delete()) {
			$this->Session->setFlash(__('Payment detail deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Payment detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
