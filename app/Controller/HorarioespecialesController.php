<?php
App::uses('AppController', 'Controller');
/**
 * Horarioespeciales Controller
 *
 * @property Horarioespeciale $Horarioespeciale
 */
class HorarioespecialesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Horarioespeciale->recursive = 0;
		$this->set('horarioespeciales', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Horarioespeciale->id = $id;
		if (!$this->Horarioespeciale->exists()) {
			throw new NotFoundException(__('Invalid horarioespeciale'));
		}
		$this->set('horarioespeciale', $this->Horarioespeciale->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Horarioespeciale->create();
			if ($this->Horarioespeciale->save($this->request->data)) {
				$this->Session->setFlash(__('The horarioespeciale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horarioespeciale could not be saved. Please, try again.'));
			}
		}
		$grupos = $this->Horarioespeciale->Grupo->find('list');
		$instructores = $this->Horarioespeciale->Instructore->find('list');
		$ambientes = $this->Horarioespeciale->Ambiente->find('list');
		$calendarioAcademicos = $this->Horarioespeciale->CalendarioAcademico->find('list');
		$competencias = $this->Horarioespeciale->Competencium->find('list');
		$this->set(compact('grupos', 'instructores', 'ambientes', 'calendarioAcademicos', 'competencias'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Horarioespeciale->id = $id;
		if (!$this->Horarioespeciale->exists()) {
			throw new NotFoundException(__('Invalid horarioespeciale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Horarioespeciale->save($this->request->data)) {
				$this->Session->setFlash(__('The horarioespeciale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horarioespeciale could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Horarioespeciale->read(null, $id);
		}
		$grupos = $this->Horarioespeciale->Grupo->find('list');
		$instructores = $this->Horarioespeciale->Instructore->find('list');
		$ambientes = $this->Horarioespeciale->Ambiente->find('list');
		$calendarioAcademicos = $this->Horarioespeciale->CalendarioAcademico->find('list');
		$competencias = $this->Horarioespeciale->Competencium->find('list');
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
		$this->Horarioespeciale->id = $id;
		if (!$this->Horarioespeciale->exists()) {
			throw new NotFoundException(__('Invalid horarioespeciale'));
		}
		if ($this->Horarioespeciale->delete()) {
			$this->Session->setFlash(__('Horarioespeciale deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Horarioespeciale was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
