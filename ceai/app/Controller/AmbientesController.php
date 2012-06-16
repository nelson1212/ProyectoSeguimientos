<?php
App::uses('AppController', 'Controller');
/**
 * Ambientes Controller
 *
 * @property Ambiente $Ambiente
 */
class AmbientesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ambiente->recursive = 0;
		$this->set('ambientes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Ambiente->id = $id;
		if (!$this->Ambiente->exists()) {
			throw new NotFoundException(__('Invalid ambiente'));
		}
		$this->set('ambiente', $this->Ambiente->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ambiente->create();
			if ($this->Ambiente->save($this->request->data)) {
				$this->Session->setFlash(__('The ambiente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambiente could not be saved. Please, try again.'));
			}
		}
		$centros = $this->Ambiente->Centro->find('list');
		$this->set(compact('centros'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Ambiente->id = $id;
		if (!$this->Ambiente->exists()) {
			throw new NotFoundException(__('Invalid ambiente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ambiente->save($this->request->data)) {
				$this->Session->setFlash(__('The ambiente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambiente could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Ambiente->read(null, $id);
		}
		$centros = $this->Ambiente->Centro->find('list');
		$this->set(compact('centros'));
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
		$this->Ambiente->id = $id;
		if (!$this->Ambiente->exists()) {
			throw new NotFoundException(__('Invalid ambiente'));
		}
		if ($this->Ambiente->delete()) {
			$this->Session->setFlash(__('Ambiente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ambiente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
