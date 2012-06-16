<?php
App::uses('AppController', 'Controller');
/**
 * Solicitudes Controller
 *
 * @property Solicitude $Solicitude
 */
class SolicitudesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Solicitude->recursive = 0;
		$this->set('solicitudes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Solicitude->id = $id;
		if (!$this->Solicitude->exists()) {
			throw new NotFoundException(__('Invalid solicitude'));
		}
		$this->set('solicitude', $this->Solicitude->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Solicitude->create();
			if ($this->Solicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitude has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitude could not be saved. Please, try again.'));
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
		$this->Solicitude->id = $id;
		if (!$this->Solicitude->exists()) {
			throw new NotFoundException(__('Invalid solicitude'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Solicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitude has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitude could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Solicitude->read(null, $id);
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
		$this->Solicitude->id = $id;
		if (!$this->Solicitude->exists()) {
			throw new NotFoundException(__('Invalid solicitude'));
		}
		if ($this->Solicitude->delete()) {
			$this->Session->setFlash(__('Solicitude deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Solicitude was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
