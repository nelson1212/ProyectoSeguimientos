<?php
App::uses('AppController', 'Controller');
/**
 * Competencias Controller
 *
 * @property Competencia $Competencia
 */
class CompetenciasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Competencia->recursive = 0;
		$this->set('competencias', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Competencia->id = $id;
		if (!$this->Competencia->exists()) {
			throw new NotFoundException(__('Invalid competencia'));
		}
		$this->set('competencia', $this->Competencia->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Competencia->create();
			if ($this->Competencia->save($this->request->data)) {
				$this->Session->setFlash(__('The competencia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competencia could not be saved. Please, try again.'));
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
		$this->Competencia->id = $id;
		if (!$this->Competencia->exists()) {
			throw new NotFoundException(__('Invalid competencia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Competencia->save($this->request->data)) {
				$this->Session->setFlash(__('The competencia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competencia could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Competencia->read(null, $id);
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
		$this->Competencia->id = $id;
		if (!$this->Competencia->exists()) {
			throw new NotFoundException(__('Invalid competencia'));
		}
		if ($this->Competencia->delete()) {
			$this->Session->setFlash(__('Competencia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Competencia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
