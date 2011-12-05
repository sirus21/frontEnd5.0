<?php
App::uses('AppController', 'Controller');
/**
 * CallSessions Controller
 *
 * @property CallSession $CallSession
 */
class CallSessionsController extends AppController {


/**
 * index method
 *
 * @return void
 */


var $paginate = array(
'limit' => 20,

);
var $components = array('RequestHandler');
var $helpers = array('Js' => array('Jquery'),'Time'); 


        

	public function index() {
		$this->layout='front_end_not_logged_in'; 
		//$this->CallSession->recursive = 0;
		
		$this->set('username',$this->Auth->user('username')); 
		$this->set('callSessions', $this->paginate(array('CallSession.paid'=>'1')));
	}

   public function loadleads($type=null,$date_range=null)
{
	
	        $this->CallSession->recursive = 0;
		$this->set('callSessions', $this->paginate());
	

}


/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		
		$this->CallSession->id = $id;
		if (!$this->CallSession->exists()) {
			throw new NotFoundException(__('Invalid call session'));
		}
		$this->set('callSession', $this->CallSession->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CallSession->create();
			if ($this->CallSession->save($this->request->data)) {
				$this->Session->setFlash(__('The call session has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call session could not be saved. Please, try again.'));
			}
		}
		$camps = $this->CallSession->Camp->find('list');
		$this->set(compact('camps'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CallSession->id = $id;
		if (!$this->CallSession->exists()) {
			throw new NotFoundException(__('Invalid call session'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CallSession->save($this->request->data)) {
				$this->Session->setFlash(__('The call session has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call session could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CallSession->read(null, $id);
		}
		$camps = $this->CallSession->Camp->find('list');
		$this->set(compact('camps'));
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
		$this->CallSession->id = $id;
		if (!$this->CallSession->exists()) {
			throw new NotFoundException(__('Invalid call session'));
		}
		if ($this->CallSession->delete()) {
			$this->Session->setFlash(__('Call session deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Call session was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
