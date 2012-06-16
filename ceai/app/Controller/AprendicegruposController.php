<?php
App::uses('AppController', 'Controller');
/**
 * Aprendicegrupos Controller
 *
 * @property Aprendicegrupo $Aprendicegrupo
 */
class AprendicegruposController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aprendicegrupo->recursive = 0;
		$this->set('aprendicegrupos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aprendicegrupo->id = $id;
		if (!$this->Aprendicegrupo->exists()) {
			throw new NotFoundException(__('Invalid aprendicegrupo'));
		}
		$this->set('aprendicegrupo', $this->Aprendicegrupo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aprendicegrupo->create();
			if ($this->Aprendicegrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The aprendicegrupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprendicegrupo could not be saved. Please, try again.'));
			}
		}
		$grupos = $this->Aprendicegrupo->Grupo->find('list');
		$aprendices = $this->Aprendicegrupo->Aprendice->find('list');
		$this->set(compact('grupos', 'aprendices'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Aprendicegrupo->id = $id;
		if (!$this->Aprendicegrupo->exists()) {
			throw new NotFoundException(__('Invalid aprendicegrupo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aprendicegrupo->save($this->request->data)) {
				$this->Session->setFlash(__('The aprendicegrupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprendicegrupo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aprendicegrupo->read(null, $id);
		}
		$grupos = $this->Aprendicegrupo->Grupo->find('list');
		$aprendices = $this->Aprendicegrupo->Aprendice->find('list');
		$this->set(compact('grupos', 'aprendices'));
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
		$this->Aprendicegrupo->id = $id;
		if (!$this->Aprendicegrupo->exists()) {
			throw new NotFoundException(__('Invalid aprendicegrupo'));
		}
		if ($this->Aprendicegrupo->delete()) {
			$this->Session->setFlash(__('Aprendicegrupo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aprendicegrupo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
