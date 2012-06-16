<?php
App::uses('AppController', 'Controller');
/**
 * Acudientes Controller
 *
 * @property Acudiente $Acudiente
 */
class AcudientesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Acudiente->recursive = 0;
		$this->set('acudientes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Acudiente->id = $id;
		if (!$this->Acudiente->exists()) {
			throw new NotFoundException(__('Invalid acudiente'));
		}
		$this->set('acudiente', $this->Acudiente->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acudiente->create();
			if ($this->Acudiente->save($this->request->data)) {
				$this->Session->setFlash(__('The acudiente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acudiente could not be saved. Please, try again.'));
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
		$this->Acudiente->id = $id;
		if (!$this->Acudiente->exists()) {
			throw new NotFoundException(__('Invalid acudiente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Acudiente->save($this->request->data)) {
				$this->Session->setFlash(__('The acudiente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acudiente could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Acudiente->read(null, $id);
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
		$this->Acudiente->id = $id;
		if (!$this->Acudiente->exists()) {
			throw new NotFoundException(__('Invalid acudiente'));
		}
		if ($this->Acudiente->delete()) {
			$this->Session->setFlash(__('Acudiente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Acudiente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
