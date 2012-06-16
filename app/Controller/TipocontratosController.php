<?php
App::uses('AppController', 'Controller');
/**
 * Tipocontratos Controller
 *
 * @property Tipocontrato $Tipocontrato
 */
class TipocontratosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tipocontrato->recursive = 0;
		$this->set('tipocontratos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tipocontrato->id = $id;
		if (!$this->Tipocontrato->exists()) {
			throw new NotFoundException(__('Invalid tipocontrato'));
		}
		$this->set('tipocontrato', $this->Tipocontrato->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipocontrato->create();
			if ($this->Tipocontrato->save($this->request->data)) {
				$this->Session->setFlash(__('The tipocontrato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipocontrato could not be saved. Please, try again.'));
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
		$this->Tipocontrato->id = $id;
		if (!$this->Tipocontrato->exists()) {
			throw new NotFoundException(__('Invalid tipocontrato'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipocontrato->save($this->request->data)) {
				$this->Session->setFlash(__('The tipocontrato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipocontrato could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tipocontrato->read(null, $id);
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
		$this->Tipocontrato->id = $id;
		if (!$this->Tipocontrato->exists()) {
			throw new NotFoundException(__('Invalid tipocontrato'));
		}
		if ($this->Tipocontrato->delete()) {
			$this->Session->setFlash(__('Tipocontrato deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipocontrato was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
