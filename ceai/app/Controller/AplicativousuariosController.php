<?php
App::uses('AppController', 'Controller');
/**
 * Aplicativousuarios Controller
 *
 * @property Aplicativousuario $Aplicativousuario
 */
class AplicativousuariosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aplicativousuario->recursive = 0;
		$this->set('aplicativousuarios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aplicativousuario->id = $id;
		if (!$this->Aplicativousuario->exists()) {
			throw new NotFoundException(__('Invalid aplicativousuario'));
		}
		$this->set('aplicativousuario', $this->Aplicativousuario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aplicativousuario->create();
			if ($this->Aplicativousuario->save($this->request->data)) {
				$this->Session->setFlash(__('The aplicativousuario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aplicativousuario could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Aplicativousuario->Usuario->find('list');
		$aplicativos = $this->Aplicativousuario->Aplicativo->find('list');
		$this->set(compact('usuarios', 'aplicativos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Aplicativousuario->id = $id;
		if (!$this->Aplicativousuario->exists()) {
			throw new NotFoundException(__('Invalid aplicativousuario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aplicativousuario->save($this->request->data)) {
				$this->Session->setFlash(__('The aplicativousuario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aplicativousuario could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aplicativousuario->read(null, $id);
		}
		$usuarios = $this->Aplicativousuario->Usuario->find('list');
		$aplicativos = $this->Aplicativousuario->Aplicativo->find('list');
		$this->set(compact('usuarios', 'aplicativos'));
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
		$this->Aplicativousuario->id = $id;
		if (!$this->Aplicativousuario->exists()) {
			throw new NotFoundException(__('Invalid aplicativousuario'));
		}
		if ($this->Aplicativousuario->delete()) {
			$this->Session->setFlash(__('Aplicativousuario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aplicativousuario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
