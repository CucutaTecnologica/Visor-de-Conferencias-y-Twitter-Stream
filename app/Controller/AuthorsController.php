<?php
App::uses('AppController', 'Controller');
/**
 * Authors Controller
 *
 * @property Author $Author
 */
class AuthorsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Author->recursive = 0;
		$this->set('authors', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Author->id = $id;
		if (!$this->Author->exists()) {
			throw new NotFoundException(__('Invalid author'));
		}
		$this->set('author', $this->Author->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Author->create();
			if ($this->Author->save($this->request->data)) {
				$this->Session->setFlash(__('The author has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The author could not be saved. Please, try again.'));
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
		$this->Author->id = $id;
		if (!$this->Author->exists()) {
			throw new NotFoundException(__('Invalid author'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Author->save($this->request->data)) {
				$this->Session->setFlash(__('The author has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The author could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Author->read(null, $id);
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
		$this->Author->id = $id;
		if (!$this->Author->exists()) {
			throw new NotFoundException(__('Invalid author'));
		}
		if ($this->Author->delete()) {
			$this->Session->setFlash(__('Author deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Author was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
