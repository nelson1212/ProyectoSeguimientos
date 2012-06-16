<?php
App::uses('AppController', 'Controller');
/**
 * Inasistencias Controller
 *
 * @property Inasistencia $Inasistencia
 */
class InasistenciasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Inasistencia->recursive = 0;
		$this->set('inasistencias', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Inasistencia->id = $id;
		if (!$this->Inasistencia->exists()) {
			throw new NotFoundException(__('Invalid inasistencia'));
		}
		$this->set('inasistencia', $this->Inasistencia->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Inasistencia->create();
			if ($this->Inasistencia->save($this->request->data)) {
				$this->Session->setFlash(__('The inasistencia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inasistencia could not be saved. Please, try again.'));
			}
		}
		$calificaciones = $this->Inasistencia->Calificacione->find('list');
		$this->set(compact('calificaciones'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Inasistencia->id = $id;
		if (!$this->Inasistencia->exists()) {
			throw new NotFoundException(__('Invalid inasistencia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inasistencia->save($this->request->data)) {
				$this->Session->setFlash(__('The inasistencia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inasistencia could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Inasistencia->read(null, $id);
		}
		$calificaciones = $this->Inasistencia->Calificacione->find('list');
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
		$this->Inasistencia->id = $id;
		if (!$this->Inasistencia->exists()) {
			throw new NotFoundException(__('Invalid inasistencia'));
		}
		if ($this->Inasistencia->delete()) {
			$this->Session->setFlash(__('Inasistencia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Inasistencia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
