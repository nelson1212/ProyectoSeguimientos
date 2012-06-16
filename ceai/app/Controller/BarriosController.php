<?php
App::uses('AppController', 'Controller');
/**
 * Barrios Controller
 *
 * @property Barrio $Barrio
 */
class BarriosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
	   $this->layout = "principal";
		$this->Barrio->recursive = 0;
		$this->set('barrios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Barrio->id = $id;
		if (!$this->Barrio->exists()) {
			throw new NotFoundException(__('Invalid barrio'));
		}
		$this->set('barrio', $this->Barrio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	   $this->layout = "principal";
		if ($this->request->is('post')) {
			$this->Barrio->create();
			if ($this->Barrio->save($this->request->data)) {
				$this->Session->setFlash(__('The barrio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The barrio could not be saved. Please, try again.'));
			}
		}
		$ciudades = $this->Barrio->Ciudade->find('list', array("fields"=>array("id", "nombre")));
		$this->set(compact('ciudades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Barrio->id = $id;
		if (!$this->Barrio->exists()) {
			throw new NotFoundException(__('Invalid barrio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Barrio->save($this->request->data)) {
				$this->Session->setFlash(__('The barrio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The barrio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Barrio->read(null, $id);
		}
		$ciudades = $this->Barrio->Ciudade->find('list');
		$this->set(compact('ciudades'));
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
		$this->Barrio->id = $id;
		if (!$this->Barrio->exists()) {
			throw new NotFoundException(__('Invalid barrio'));
		}
		if ($this->Barrio->delete()) {
			$this->Session->setFlash(__('Barrio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Barrio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
