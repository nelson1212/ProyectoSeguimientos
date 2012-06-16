<?php
App::uses('AppController', 'Controller');
/**
 * Etapas Controller
 *
 * @property Etapa $Etapa
 */
class EtapasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Etapa->recursive = 0;
		$this->set('etapas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		$this->set('etapa', $this->Etapa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Etapa->create();
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash(__('The etapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.'));
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
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash(__('The etapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Etapa->read(null, $id);
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
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		if ($this->Etapa->delete()) {
			$this->Session->setFlash(__('Etapa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Etapa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
