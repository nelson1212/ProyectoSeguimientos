<?php
App::uses('AppController', 'Controller');
/**
 * Actainstructores Controller
 *
 * @property Actainstructore $Actainstructore
 */
class ActainstructoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Actainstructore->recursive = 0;
		$this->set('actainstructores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Actainstructore->id = $id;
		if (!$this->Actainstructore->exists()) {
			throw new NotFoundException(__('Invalid actainstructore'));
		}
		$this->set('actainstructore', $this->Actainstructore->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Actainstructore->create();
			if ($this->Actainstructore->save($this->request->data)) {
				$this->Session->setFlash(__('The actainstructore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actainstructore could not be saved. Please, try again.'));
			}
		}
		$actas = $this->Actainstructore->Actum->find('list');
		$instructores = $this->Actainstructore->Instructore->find('list');
		$this->set(compact('actas', 'instructores'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Actainstructore->id = $id;
		if (!$this->Actainstructore->exists()) {
			throw new NotFoundException(__('Invalid actainstructore'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Actainstructore->save($this->request->data)) {
				$this->Session->setFlash(__('The actainstructore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actainstructore could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Actainstructore->read(null, $id);
		}
		$actas = $this->Actainstructore->Actum->find('list');
		$instructores = $this->Actainstructore->Instructore->find('list');
		$this->set(compact('actas', 'instructores'));
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
		$this->Actainstructore->id = $id;
		if (!$this->Actainstructore->exists()) {
			throw new NotFoundException(__('Invalid actainstructore'));
		}
		if ($this->Actainstructore->delete()) {
			$this->Session->setFlash(__('Actainstructore deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actainstructore was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
