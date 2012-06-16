<?php
App::uses('AppController', 'Controller');
/**
 * Resultadoaprendizajes Controller
 *
 * @property Resultadoaprendizaje $Resultadoaprendizaje
 */
class ResultadoaprendizajesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Resultadoaprendizaje->recursive = 0;
		$this->set('resultadoaprendizajes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Resultadoaprendizaje->id = $id;
		if (!$this->Resultadoaprendizaje->exists()) {
			throw new NotFoundException(__('Invalid resultadoaprendizaje'));
		}
		$this->set('resultadoaprendizaje', $this->Resultadoaprendizaje->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Resultadoaprendizaje->create();
			if ($this->Resultadoaprendizaje->save($this->request->data)) {
				$this->Session->setFlash(__('The resultadoaprendizaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resultadoaprendizaje could not be saved. Please, try again.'));
			}
		}
		$competencias = $this->Resultadoaprendizaje->Competencia->find('list');
		$this->set(compact('competencias'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Resultadoaprendizaje->id = $id;
		if (!$this->Resultadoaprendizaje->exists()) {
			throw new NotFoundException(__('Invalid resultadoaprendizaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Resultadoaprendizaje->save($this->request->data)) {
				$this->Session->setFlash(__('The resultadoaprendizaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resultadoaprendizaje could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Resultadoaprendizaje->read(null, $id);
		}
		$competencias = $this->Resultadoaprendizaje->Competencia->find('list');
		$this->set(compact('competencias'));
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
		$this->Resultadoaprendizaje->id = $id;
		if (!$this->Resultadoaprendizaje->exists()) {
			throw new NotFoundException(__('Invalid resultadoaprendizaje'));
		}
		if ($this->Resultadoaprendizaje->delete()) {
			$this->Session->setFlash(__('Resultadoaprendizaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resultadoaprendizaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
