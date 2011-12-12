<?php
App::uses('AppController', 'Controller');
/**
 * Calls Controller
 *
 * @property Call $Call
 */
class CallsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Call->recursive = 0;
		$this->set('calls', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Call->id = $id;
		if (!$this->Call->exists()) {
			throw new NotFoundException(__('Invalid call'));
		}
		$this->set('call', $this->Call->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Call->create();
			if ($this->Call->save($this->request->data)) {
				$this->Session->setFlash(__('The call has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call could not be saved. Please, try again.'));
			}
		}
		$callSessions = $this->Call->CallSession->find('list');
		$this->set(compact('callSessions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Call->id = $id;
		if (!$this->Call->exists()) {
			throw new NotFoundException(__('Invalid call'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Call->save($this->request->data)) {
				$this->Session->setFlash(__('The call has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Call->read(null, $id);
		}
		$callSessions = $this->Call->CallSession->find('list');
		$this->set(compact('callSessions'));
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
		$this->Call->id = $id;
		if (!$this->Call->exists()) {
			throw new NotFoundException(__('Invalid call'));
		}
		if ($this->Call->delete()) {
			$this->Session->setFlash(__('Call deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Call was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Call->recursive = 0;
		$this->set('calls', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Call->id = $id;
		if (!$this->Call->exists()) {
			throw new NotFoundException(__('Invalid call'));
		}
		$this->set('call', $this->Call->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Call->create();
			if ($this->Call->save($this->request->data)) {
				$this->Session->setFlash(__('The call has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call could not be saved. Please, try again.'));
			}
		}
		$callSessions = $this->Call->CallSession->find('list');
		$this->set(compact('callSessions'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Call->id = $id;
		if (!$this->Call->exists()) {
			throw new NotFoundException(__('Invalid call'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Call->save($this->request->data)) {
				$this->Session->setFlash(__('The call has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Call->read(null, $id);
		}
		$callSessions = $this->Call->CallSession->find('list');
		$this->set(compact('callSessions'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Call->id = $id;
		if (!$this->Call->exists()) {
			throw new NotFoundException(__('Invalid call'));
		}
		if ($this->Call->delete()) {
			$this->Session->setFlash(__('Call deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Call was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
