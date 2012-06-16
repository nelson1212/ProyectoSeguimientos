<?php
App::uses('AppController', 'Controller');
/**
 * Vinculos Controller
 *
 * @property Vinculo $Vinculo
 */
class VinculosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vinculo->recursive = 0;
		$this->set('vinculos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vinculo->id = $id;
		if (!$this->Vinculo->exists()) {
			throw new NotFoundException(__('Invalid vinculo'));
		}
		$this->set('vinculo', $this->Vinculo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vinculo->create();
			if ($this->Vinculo->save($this->request->data)) {
				$this->Session->setFlash(__('The vinculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vinculo could not be saved. Please, try again.'));
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
		$this->Vinculo->id = $id;
		if (!$this->Vinculo->exists()) {
			throw new NotFoundException(__('Invalid vinculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vinculo->save($this->request->data)) {
				$this->Session->setFlash(__('The vinculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vinculo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vinculo->read(null, $id);
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
		$this->Vinculo->id = $id;
		if (!$this->Vinculo->exists()) {
			throw new NotFoundException(__('Invalid vinculo'));
		}
		if ($this->Vinculo->delete()) {
			$this->Session->setFlash(__('Vinculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vinculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
