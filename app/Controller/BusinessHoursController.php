<?php
App::uses('AppController', 'Controller');
/**
 * BusinessHours Controller
 *
 * @property BusinessHour $BusinessHour
 */
class BusinessHoursController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BusinessHour->recursive = 0;
		$this->set('businessHours', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BusinessHour->id = $id;
		if (!$this->BusinessHour->exists()) {
			throw new NotFoundException(__('Invalid business hour'));
		}
		$this->set('businessHour', $this->BusinessHour->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BusinessHour->create();
			if ($this->BusinessHour->save($this->request->data)) {
				$this->Session->setFlash(__('The business hour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business hour could not be saved. Please, try again.'));
			}
		}
		$camps = $this->BusinessHour->Camp->find('list');
		$this->set(compact('camps'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BusinessHour->id = $id;
		if (!$this->BusinessHour->exists()) {
			throw new NotFoundException(__('Invalid business hour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BusinessHour->save($this->request->data)) {
				$this->Session->setFlash(__('The business hour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business hour could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BusinessHour->read(null, $id);
		}
		$camps = $this->BusinessHour->Camp->find('list');
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
		$this->BusinessHour->id = $id;
		if (!$this->BusinessHour->exists()) {
			throw new NotFoundException(__('Invalid business hour'));
		}
		if ($this->BusinessHour->delete()) {
			$this->Session->setFlash(__('Business hour deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Business hour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
