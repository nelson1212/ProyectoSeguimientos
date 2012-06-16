<?php
App::uses('AppController', 'Controller');
/**
 * Aprendiceempresas Controller
 *
 * @property Aprendiceempresa $Aprendiceempresa
 */
class AprendiceempresasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aprendiceempresa->recursive = 0;
		$this->set('aprendiceempresas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aprendiceempresa->id = $id;
		if (!$this->Aprendiceempresa->exists()) {
			throw new NotFoundException(__('Invalid aprendiceempresa'));
		}
		$this->set('aprendiceempresa', $this->Aprendiceempresa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aprendiceempresa->create();
			if ($this->Aprendiceempresa->save($this->request->data)) {
				$this->Session->setFlash(__('The aprendiceempresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprendiceempresa could not be saved. Please, try again.'));
			}
		}
		$aprendices = $this->Aprendiceempresa->Aprendice->find('list');
		$empresas = $this->Aprendiceempresa->Empresa->find('list');
		$this->set(compact('aprendices', 'empresas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Aprendiceempresa->id = $id;
		if (!$this->Aprendiceempresa->exists()) {
			throw new NotFoundException(__('Invalid aprendiceempresa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aprendiceempresa->save($this->request->data)) {
				$this->Session->setFlash(__('The aprendiceempresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprendiceempresa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aprendiceempresa->read(null, $id);
		}
		$aprendices = $this->Aprendiceempresa->Aprendice->find('list');
		$empresas = $this->Aprendiceempresa->Empresa->find('list');
		$this->set(compact('aprendices', 'empresas'));
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
		$this->Aprendiceempresa->id = $id;
		if (!$this->Aprendiceempresa->exists()) {
			throw new NotFoundException(__('Invalid aprendiceempresa'));
		}
		if ($this->Aprendiceempresa->delete()) {
			$this->Session->setFlash(__('Aprendiceempresa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aprendiceempresa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
