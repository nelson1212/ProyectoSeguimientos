<?php
App::uses('AppController', 'Controller');
/**
 * Conceptualgrupos Controller
 *
 * @property Conceptualgrupo $Conceptualgrupo
 */
class ConceptualgruposController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Conceptualgrupo->recursive = 0;
		$this->set('conceptualgrupos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Conceptualgrupo->id = $id;
		if (!$this->Conceptualgrupo->exists()) {
			throw new NotFoundException(__('Invalid conceptualgrupo'));
		}
		$this->set('conceptualgrupo', $this->Conceptualgrupo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conceptualgrupo->create();
			if ($this->Conceptualgrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The conceptualgrupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conceptualgrupo could not be saved. Please, try again.'));
			}
		}
		$actas = $this->Conceptualgrupo->Actum->find('list');
		$this->set(compact('actas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Conceptualgrupo->id = $id;
		if (!$this->Conceptualgrupo->exists()) {
			throw new NotFoundException(__('Invalid conceptualgrupo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Conceptualgrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The conceptualgrupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conceptualgrupo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Conceptualgrupo->read(null, $id);
		}
		$actas = $this->Conceptualgrupo->Actum->find('list');
		$this->set(compact('actas'));
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
		$this->Conceptualgrupo->id = $id;
		if (!$this->Conceptualgrupo->exists()) {
			throw new NotFoundException(__('Invalid conceptualgrupo'));
		}
		if ($this->Conceptualgrupo->delete()) {
			$this->Session->setFlash(__('Conceptualgrupo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Conceptualgrupo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
