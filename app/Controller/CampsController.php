<?php
App::uses('AppController', 'Controller');
/**
 * Camps Controller
 *
 * @property Camp $Camp
 */
class CampsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Camp->recursive = 0;
		$this->set('camps', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Camp->id = $id;
		if (!$this->Camp->exists()) {
			throw new NotFoundException(__('Invalid camp'));
		}
		$this->set('camp', $this->Camp->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Camp->create();
			if ($this->Camp->save($this->request->data)) {
				$this->Session->setFlash(__('The camp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The camp could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Camp->id = $id;
		if (!$this->Camp->exists()) {
			throw new NotFoundException(__('Invalid camp'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Camp->save($this->request->data)) {
				$this->Session->setFlash(__('The camp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The camp could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Camp->read(null, $id);
		}
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
		$this->Camp->id = $id;
		if (!$this->Camp->exists()) {
			throw new NotFoundException(__('Invalid camp'));
		}
		if ($this->Camp->delete()) {
			$this->Session->setFlash(__('Camp deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Camp was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
