<?php
App::uses('AppController', 'Controller');
/**
 * Especialidades Controller
 *
 * @property Especialidade $Especialidade
 */
class EspecialidadesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Especialidade->recursive = 0;
		$this->set('especialidades', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Especialidade->id = $id;
		if (!$this->Especialidade->exists()) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		$this->set('especialidade', $this->Especialidade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Especialidade->create();
			if ($this->Especialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The especialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidade could not be saved. Please, try again.'));
			}
		}
		$tipoformaciones = $this->Especialidade->Tipoformacione->find('list');
		$this->set(compact('tipoformaciones'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Especialidade->id = $id;
		if (!$this->Especialidade->exists()) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Especialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The especialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Especialidade->read(null, $id);
		}
		$tipoformaciones = $this->Especialidade->Tipoformacione->find('list');
		$this->set(compact('tipoformaciones'));
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
		$this->Especialidade->id = $id;
		if (!$this->Especialidade->exists()) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		if ($this->Especialidade->delete()) {
			$this->Session->setFlash(__('Especialidade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Especialidade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
