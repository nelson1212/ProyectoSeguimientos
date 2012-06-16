<?php
App::uses('AppController', 'Controller');
/**
 * Trimestres Controller
 *
 * @property Trimestre $Trimestre
 */
class TrimestresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Trimestre->recursive = 0;
		$this->set('trimestres', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Trimestre->id = $id;
		if (!$this->Trimestre->exists()) {
			throw new NotFoundException(__('Invalid trimestre'));
		}
		$this->set('trimestre', $this->Trimestre->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Trimestre->create();
			if ($this->Trimestre->save($this->request->data)) {
				$this->Session->setFlash(__('The trimestre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trimestre could not be saved. Please, try again.'));
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
		$this->Trimestre->id = $id;
		if (!$this->Trimestre->exists()) {
			throw new NotFoundException(__('Invalid trimestre'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Trimestre->save($this->request->data)) {
				$this->Session->setFlash(__('The trimestre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trimestre could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Trimestre->read(null, $id);
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
		$this->Trimestre->id = $id;
		if (!$this->Trimestre->exists()) {
			throw new NotFoundException(__('Invalid trimestre'));
		}
		if ($this->Trimestre->delete()) {
			$this->Session->setFlash(__('Trimestre deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Trimestre was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
