<?php
App::uses('AppController', 'Controller');
/**
 * Tipoformaciones Controller
 *
 * @property Tipoformacione $Tipoformacione
 */
class TipoformacionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tipoformacione->recursive = 0;
		$this->set('tipoformaciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tipoformacione->id = $id;
		if (!$this->Tipoformacione->exists()) {
			throw new NotFoundException(__('Invalid tipoformacione'));
		}
		$this->set('tipoformacione', $this->Tipoformacione->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipoformacione->create();
			if ($this->Tipoformacione->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoformacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoformacione could not be saved. Please, try again.'));
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
		$this->Tipoformacione->id = $id;
		if (!$this->Tipoformacione->exists()) {
			throw new NotFoundException(__('Invalid tipoformacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipoformacione->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoformacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoformacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tipoformacione->read(null, $id);
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
		$this->Tipoformacione->id = $id;
		if (!$this->Tipoformacione->exists()) {
			throw new NotFoundException(__('Invalid tipoformacione'));
		}
		if ($this->Tipoformacione->delete()) {
			$this->Session->setFlash(__('Tipoformacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipoformacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
