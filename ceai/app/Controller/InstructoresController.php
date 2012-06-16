<?php
App::uses('AppController', 'Controller');
/**
 * Instructores Controller
 *
 * @property Instructore $Instructore
 */
class InstructoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instructore->recursive = 0;
		$this->set('instructores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Instructore->id = $id;
		if (!$this->Instructore->exists()) {
			throw new NotFoundException(__('Invalid instructore'));
		}
		$this->set('instructore', $this->Instructore->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instructore->create();
			if ($this->Instructore->save($this->request->data)) {
				$this->Session->setFlash(__('The instructore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructore could not be saved. Please, try again.'));
			}
		}
		$vinculos = $this->Instructore->Vinculo->find('list',array("fields"=>array("id","descripcion")));
		$centros = $this->Instructore->Centro->find('list', array("fields"=>array("id","nombre")));
		$this->set(compact('vinculos', 'centros'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Instructore->id = $id;
		if (!$this->Instructore->exists()) {
			throw new NotFoundException(__('Invalid instructore'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instructore->save($this->request->data)) {
				$this->Session->setFlash(__('The instructore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructore could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Instructore->read(null, $id);
		}
		$vinculos = $this->Instructore->Vinculo->find('list');
		$centros = $this->Instructore->Centro->find('list');
		$this->set(compact('vinculos', 'centros'));
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
		$this->Instructore->id = $id;
		if (!$this->Instructore->exists()) {
			throw new NotFoundException(__('Invalid instructore'));
		}
		if ($this->Instructore->delete()) {
			$this->Session->setFlash(__('Instructore deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instructore was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
