<?php
App::uses('AppController', 'Controller');
/**
 * Aprendicesolicitudes Controller
 *
 * @property Aprendicesolicitude $Aprendicesolicitude
 */
class AprendicesolicitudesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aprendicesolicitude->recursive = 0;
		$this->set('aprendicesolicitudes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aprendicesolicitude->id = $id;
		if (!$this->Aprendicesolicitude->exists()) {
			throw new NotFoundException(__('Invalid aprendicesolicitude'));
		}
		$this->set('aprendicesolicitude', $this->Aprendicesolicitude->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aprendicesolicitude->create();
			if ($this->Aprendicesolicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The aprendicesolicitude has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprendicesolicitude could not be saved. Please, try again.'));
			}
		}
		$actas = $this->Aprendicesolicitude->Actum->find('list');
		$solicitudes = $this->Aprendicesolicitude->Solicitude->find('list');
		$aprendices = $this->Aprendicesolicitude->Aprendice->find('list');
		$this->set(compact('actas', 'solicitudes', 'aprendices'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Aprendicesolicitude->id = $id;
		if (!$this->Aprendicesolicitude->exists()) {
			throw new NotFoundException(__('Invalid aprendicesolicitude'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aprendicesolicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The aprendicesolicitude has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprendicesolicitude could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aprendicesolicitude->read(null, $id);
		}
		$actas = $this->Aprendicesolicitude->Actum->find('list');
		$solicitudes = $this->Aprendicesolicitude->Solicitude->find('list');
		$aprendices = $this->Aprendicesolicitude->Aprendice->find('list');
		$this->set(compact('actas', 'solicitudes', 'aprendices'));
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
		$this->Aprendicesolicitude->id = $id;
		if (!$this->Aprendicesolicitude->exists()) {
			throw new NotFoundException(__('Invalid aprendicesolicitude'));
		}
		if ($this->Aprendicesolicitude->delete()) {
			$this->Session->setFlash(__('Aprendicesolicitude deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aprendicesolicitude was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
