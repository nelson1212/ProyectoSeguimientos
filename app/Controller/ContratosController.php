<?php
App::uses('AppController', 'Controller');
/**
 * Contratos Controller
 *
 * @property Contrato $Contrato
 */
class ContratosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contrato->recursive = 0;
		$this->set('contratos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contrato->id = $id;
		if (!$this->Contrato->exists()) {
			throw new NotFoundException(__('Invalid contrato'));
		}
		$this->set('contrato', $this->Contrato->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contrato->create();
			if ($this->Contrato->save($this->request->data)) {
				$this->Session->setFlash(__('The contrato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contrato could not be saved. Please, try again.'));
			}
		}
		$instructores = $this->Contrato->Instructore->find('list');
		$tipocontratos = $this->Contrato->Tipocontrato->find('list');
		$this->set(compact('instructores', 'tipocontratos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Contrato->id = $id;
		if (!$this->Contrato->exists()) {
			throw new NotFoundException(__('Invalid contrato'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contrato->save($this->request->data)) {
				$this->Session->setFlash(__('The contrato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contrato could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Contrato->read(null, $id);
		}
		$instructores = $this->Contrato->Instructore->find('list');
		$tipocontratos = $this->Contrato->Tipocontrato->find('list');
		$this->set(compact('instructores', 'tipocontratos'));
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
		$this->Contrato->id = $id;
		if (!$this->Contrato->exists()) {
			throw new NotFoundException(__('Invalid contrato'));
		}
		if ($this->Contrato->delete()) {
			$this->Session->setFlash(__('Contrato deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contrato was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
