<?php
App::uses('AppController', 'Controller');
/**
 * Aplicativos Controller
 *
 * @property Aplicativo $Aplicativo
 */
class AplicativosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aplicativo->recursive = 0;
		$this->set('aplicativos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aplicativo->id = $id;
		if (!$this->Aplicativo->exists()) {
			throw new NotFoundException(__('Invalid aplicativo'));
		}
		$this->set('aplicativo', $this->Aplicativo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aplicativo->create();
			if ($this->Aplicativo->save($this->request->data)) {
				$this->Session->setFlash(__('The aplicativo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aplicativo could not be saved. Please, try again.'));
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
		$this->Aplicativo->id = $id;
		if (!$this->Aplicativo->exists()) {
			throw new NotFoundException(__('Invalid aplicativo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aplicativo->save($this->request->data)) {
				$this->Session->setFlash(__('The aplicativo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aplicativo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aplicativo->read(null, $id);
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
		$this->Aplicativo->id = $id;
		if (!$this->Aplicativo->exists()) {
			throw new NotFoundException(__('Invalid aplicativo'));
		}
		if ($this->Aplicativo->delete()) {
			$this->Session->setFlash(__('Aplicativo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aplicativo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
