<?php
App::uses('AppController', 'Controller');
/**
 * Versionespecialidades Controller
 *
 * @property Versionespecialidade $Versionespecialidade
 */
class VersionespecialidadesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Versionespecialidade->recursive = 0;
		$this->set('versionespecialidades', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Versionespecialidade->id = $id;
		if (!$this->Versionespecialidade->exists()) {
			throw new NotFoundException(__('Invalid versionespecialidade'));
		}
		$this->set('versionespecialidade', $this->Versionespecialidade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Versionespecialidade->create();
			if ($this->Versionespecialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The versionespecialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The versionespecialidade could not be saved. Please, try again.'));
			}
		}
		$especialidades = $this->Versionespecialidade->Especialidade->find('list');
		$this->set(compact('especialidades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Versionespecialidade->id = $id;
		if (!$this->Versionespecialidade->exists()) {
			throw new NotFoundException(__('Invalid versionespecialidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Versionespecialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The versionespecialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The versionespecialidade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Versionespecialidade->read(null, $id);
		}
		$especialidades = $this->Versionespecialidade->Especialidade->find('list');
		$this->set(compact('especialidades'));
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
		$this->Versionespecialidade->id = $id;
		if (!$this->Versionespecialidade->exists()) {
			throw new NotFoundException(__('Invalid versionespecialidade'));
		}
		if ($this->Versionespecialidade->delete()) {
			$this->Session->setFlash(__('Versionespecialidade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Versionespecialidade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
