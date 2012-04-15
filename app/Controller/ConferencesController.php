<?php
App::uses('AppController', 'Controller');
/**
 * Conferences Controller
 *
 * @property Conference $Conference
 */
class ConferencesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Conference->recursive = 0;
		$this->set('conferences', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Conference->id = $id;
		if (!$this->Conference->exists()) {
			throw new NotFoundException(__('Invalid conference'));
		}
		$this->set('conference', $this->Conference->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conference->create();
			if ($this->Conference->save($this->request->data)) {
				$this->Session->setFlash(__('The conference has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conference could not be saved. Please, try again.'));
			}
		}
		$events = $this->Conference->Event->find('list');
		$authors = $this->Conference->Author->find('list');
		$this->set(compact('events', 'authors'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Conference->id = $id;
		if (!$this->Conference->exists()) {
			throw new NotFoundException(__('Invalid conference'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Conference->save($this->request->data)) {
				$this->Session->setFlash(__('The conference has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conference could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Conference->read(null, $id);
		}
		$events = $this->Conference->Event->find('list');
		$authors = $this->Conference->Author->find('list');
		$this->set(compact('events', 'authors'));
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
		$this->Conference->id = $id;
		if (!$this->Conference->exists()) {
			throw new NotFoundException(__('Invalid conference'));
		}
		if ($this->Conference->delete()) {
			$this->Session->setFlash(__('Conference deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Conference was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
