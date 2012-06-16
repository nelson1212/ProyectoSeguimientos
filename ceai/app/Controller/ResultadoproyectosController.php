<?php
App::uses('AppController', 'Controller');
/**
 * Resultadoproyectos Controller
 *
 * @property Resultadoproyecto $Resultadoproyecto
 */
class ResultadoproyectosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Resultadoproyecto->recursive = 0;
		$this->set('resultadoproyectos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Resultadoproyecto->id = $id;
		if (!$this->Resultadoproyecto->exists()) {
			throw new NotFoundException(__('Invalid resultadoproyecto'));
		}
		$this->set('resultadoproyecto', $this->Resultadoproyecto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Resultadoproyecto->create();
			if ($this->Resultadoproyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The resultadoproyecto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resultadoproyecto could not be saved. Please, try again.'));
			}
		}
		$proyectos = $this->Resultadoproyecto->Proyecto->find('list');
		$instructores = $this->Resultadoproyecto->Instructore->find('list');
		$resultadoaprendizajes = $this->Resultadoproyecto->Resultadoaprendizaje->find('list');
		$this->set(compact('proyectos', 'instructores', 'resultadoaprendizajes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Resultadoproyecto->id = $id;
		if (!$this->Resultadoproyecto->exists()) {
			throw new NotFoundException(__('Invalid resultadoproyecto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Resultadoproyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The resultadoproyecto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resultadoproyecto could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Resultadoproyecto->read(null, $id);
		}
		$proyectos = $this->Resultadoproyecto->Proyecto->find('list');
		$instructores = $this->Resultadoproyecto->Instructore->find('list');
		$resultadoaprendizajes = $this->Resultadoproyecto->Resultadoaprendizaje->find('list');
		$this->set(compact('proyectos', 'instructores', 'resultadoaprendizajes'));
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
		$this->Resultadoproyecto->id = $id;
		if (!$this->Resultadoproyecto->exists()) {
			throw new NotFoundException(__('Invalid resultadoproyecto'));
		}
		if ($this->Resultadoproyecto->delete()) {
			$this->Session->setFlash(__('Resultadoproyecto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resultadoproyecto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
