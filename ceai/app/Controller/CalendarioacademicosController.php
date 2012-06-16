<?php
App::uses('AppController', 'Controller');
/**
 * Calendarioacademicos Controller
 *
 * @property Calendarioacademico $Calendarioacademico
 */
class CalendarioacademicosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Calendarioacademico->recursive = 0;
		$this->set('calendarioacademicos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Calendarioacademico->id = $id;
		if (!$this->Calendarioacademico->exists()) {
			throw new NotFoundException(__('Invalid calendarioacademico'));
		}
		$this->set('calendarioacademico', $this->Calendarioacademico->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Calendarioacademico->create();
			if ($this->Calendarioacademico->save($this->request->data)) {
				$this->Session->setFlash(__('The calendarioacademico has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calendarioacademico could not be saved. Please, try again.'));
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
		$this->Calendarioacademico->id = $id;
		if (!$this->Calendarioacademico->exists()) {
			throw new NotFoundException(__('Invalid calendarioacademico'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Calendarioacademico->save($this->request->data)) {
				$this->Session->setFlash(__('The calendarioacademico has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calendarioacademico could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Calendarioacademico->read(null, $id);
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
		$this->Calendarioacademico->id = $id;
		if (!$this->Calendarioacademico->exists()) {
			throw new NotFoundException(__('Invalid calendarioacademico'));
		}
		if ($this->Calendarioacademico->delete()) {
			$this->Session->setFlash(__('Calendarioacademico deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Calendarioacademico was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
