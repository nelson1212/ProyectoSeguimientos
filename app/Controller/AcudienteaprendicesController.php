<?php
App::uses('AppController', 'Controller');
/**
 * Acudienteaprendices Controller
 *
 * @property Acudienteaprendice $Acudienteaprendice
 */
class AcudienteaprendicesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Acudienteaprendice->recursive = 0;
		$this->set('acudienteaprendices', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Acudienteaprendice->id = $id;
		if (!$this->Acudienteaprendice->exists()) {
			throw new NotFoundException(__('Invalid acudienteaprendice'));
		}
		$this->set('acudienteaprendice', $this->Acudienteaprendice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acudienteaprendice->create();
			if ($this->Acudienteaprendice->save($this->request->data)) {
				$this->Session->setFlash(__('The acudienteaprendice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acudienteaprendice could not be saved. Please, try again.'));
			}
		}
		$aprendices = $this->Acudienteaprendice->Aprendice->find('list');
		$acudientes = $this->Acudienteaprendice->Acudiente->find('list');
		$this->set(compact('aprendices', 'acudientes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Acudienteaprendice->id = $id;
		if (!$this->Acudienteaprendice->exists()) {
			throw new NotFoundException(__('Invalid acudienteaprendice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Acudienteaprendice->save($this->request->data)) {
				$this->Session->setFlash(__('The acudienteaprendice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acudienteaprendice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Acudienteaprendice->read(null, $id);
		}
		$aprendices = $this->Acudienteaprendice->Aprendice->find('list');
		$acudientes = $this->Acudienteaprendice->Acudiente->find('list');
		$this->set(compact('aprendices', 'acudientes'));
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
		$this->Acudienteaprendice->id = $id;
		if (!$this->Acudienteaprendice->exists()) {
			throw new NotFoundException(__('Invalid acudienteaprendice'));
		}
		if ($this->Acudienteaprendice->delete()) {
			$this->Session->setFlash(__('Acudienteaprendice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Acudienteaprendice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
