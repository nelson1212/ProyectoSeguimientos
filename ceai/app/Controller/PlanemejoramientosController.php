<?php
App::uses('AppController', 'Controller');
/**
 * Planemejoramientos Controller
 *
 * @property Planemejoramiento $Planemejoramiento
 */
class PlanemejoramientosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Planemejoramiento->recursive = 0;
		$this->set('planemejoramientos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Planemejoramiento->id = $id;
		if (!$this->Planemejoramiento->exists()) {
			throw new NotFoundException(__('Invalid planemejoramiento'));
		}
		$this->set('planemejoramiento', $this->Planemejoramiento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Planemejoramiento->create();
			if ($this->Planemejoramiento->save($this->request->data)) {
				$this->Session->setFlash(__('The planemejoramiento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planemejoramiento could not be saved. Please, try again.'));
			}
		}
		$calificaciones = $this->Planemejoramiento->Calificacione->find('list');
		$this->set(compact('calificaciones'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Planemejoramiento->id = $id;
		if (!$this->Planemejoramiento->exists()) {
			throw new NotFoundException(__('Invalid planemejoramiento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Planemejoramiento->save($this->request->data)) {
				$this->Session->setFlash(__('The planemejoramiento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planemejoramiento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Planemejoramiento->read(null, $id);
		}
		$calificaciones = $this->Planemejoramiento->Calificacione->find('list');
		$this->set(compact('calificaciones'));
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
		$this->Planemejoramiento->id = $id;
		if (!$this->Planemejoramiento->exists()) {
			throw new NotFoundException(__('Invalid planemejoramiento'));
		}
		if ($this->Planemejoramiento->delete()) {
			$this->Session->setFlash(__('Planemejoramiento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Planemejoramiento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
