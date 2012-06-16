<?php
App::uses('AppController', 'Controller');
/**
 * Actagrupos Controller
 *
 * @property Actagrupo $Actagrupo
 */
class ActagruposController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Actagrupo->recursive = 0;
		$this->set('actagrupos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Actagrupo->id = $id;
		if (!$this->Actagrupo->exists()) {
			throw new NotFoundException(__('Invalid actagrupo'));
		}
		$this->set('actagrupo', $this->Actagrupo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Actagrupo->create();
			if ($this->Actagrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The actagrupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actagrupo could not be saved. Please, try again.'));
			}
		}
		$actas = $this->Actagrupo->Actum->find('list');
		$grupos = $this->Actagrupo->Grupo->find('list');
		$this->set(compact('actas', 'grupos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Actagrupo->id = $id;
		if (!$this->Actagrupo->exists()) {
			throw new NotFoundException(__('Invalid actagrupo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Actagrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The actagrupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actagrupo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Actagrupo->read(null, $id);
		}
		$actas = $this->Actagrupo->Actum->find('list');
		$grupos = $this->Actagrupo->Grupo->find('list');
		$this->set(compact('actas', 'grupos'));
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
		$this->Actagrupo->id = $id;
		if (!$this->Actagrupo->exists()) {
			throw new NotFoundException(__('Invalid actagrupo'));
		}
		if ($this->Actagrupo->delete()) {
			$this->Session->setFlash(__('Actagrupo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actagrupo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
