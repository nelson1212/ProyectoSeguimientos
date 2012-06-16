<?php
App::uses('AppController', 'Controller');
/**
 * Sectores Controller
 *
 * @property Sectore $Sectore
 */
class SectoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sectore->recursive = 0;
		$this->set('sectores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sectore->id = $id;
		if (!$this->Sectore->exists()) {
			throw new NotFoundException(__('Invalid sectore'));
		}
		$this->set('sectore', $this->Sectore->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sectore->create();
			if ($this->Sectore->save($this->request->data)) {
				$this->Session->setFlash(__('The sectore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sectore could not be saved. Please, try again.'));
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
		$this->Sectore->id = $id;
		if (!$this->Sectore->exists()) {
			throw new NotFoundException(__('Invalid sectore'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sectore->save($this->request->data)) {
				$this->Session->setFlash(__('The sectore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sectore could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sectore->read(null, $id);
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
		$this->Sectore->id = $id;
		if (!$this->Sectore->exists()) {
			throw new NotFoundException(__('Invalid sectore'));
		}
		if ($this->Sectore->delete()) {
			$this->Session->setFlash(__('Sectore deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sectore was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
