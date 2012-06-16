<?php
App::uses('AppController', 'Controller');
/**
 * Horarioadministrativos Controller
 *
 * @property Horarioadministrativo $Horarioadministrativo
 */
class HorarioadministrativosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Horarioadministrativo->recursive = 0;
		$this->set('horarioadministrativos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Horarioadministrativo->id = $id;
		if (!$this->Horarioadministrativo->exists()) {
			throw new NotFoundException(__('Invalid horarioadministrativo'));
		}
		$this->set('horarioadministrativo', $this->Horarioadministrativo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Horarioadministrativo->create();
			if ($this->Horarioadministrativo->save($this->request->data)) {
				$this->Session->setFlash(__('The horarioadministrativo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horarioadministrativo could not be saved. Please, try again.'));
			}
		}
		$grupos = $this->Horarioadministrativo->Grupo->find('list');
		$instructores = $this->Horarioadministrativo->Instructore->find('list');
		$ambientes = $this->Horarioadministrativo->Ambiente->find('list');
		$calendarioAcademicos = $this->Horarioadministrativo->CalendarioAcademico->find('list');
		$competencias = $this->Horarioadministrativo->Competencium->find('list');
		$this->set(compact('grupos', 'instructores', 'ambientes', 'calendarioAcademicos', 'competencias'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Horarioadministrativo->id = $id;
		if (!$this->Horarioadministrativo->exists()) {
			throw new NotFoundException(__('Invalid horarioadministrativo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Horarioadministrativo->save($this->request->data)) {
				$this->Session->setFlash(__('The horarioadministrativo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horarioadministrativo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Horarioadministrativo->read(null, $id);
		}
		$grupos = $this->Horarioadministrativo->Grupo->find('list');
		$instructores = $this->Horarioadministrativo->Instructore->find('list');
		$ambientes = $this->Horarioadministrativo->Ambiente->find('list');
		$calendarioAcademicos = $this->Horarioadministrativo->CalendarioAcademico->find('list');
		$competencias = $this->Horarioadministrativo->Competencium->find('list');
		$this->set(compact('grupos', 'instructores', 'ambientes', 'calendarioAcademicos', 'competencias'));
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
		$this->Horarioadministrativo->id = $id;
		if (!$this->Horarioadministrativo->exists()) {
			throw new NotFoundException(__('Invalid horarioadministrativo'));
		}
		if ($this->Horarioadministrativo->delete()) {
			$this->Session->setFlash(__('Horarioadministrativo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Horarioadministrativo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
