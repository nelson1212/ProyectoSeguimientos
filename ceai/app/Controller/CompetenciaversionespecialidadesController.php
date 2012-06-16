<?php
App::uses('AppController', 'Controller');
/**
 * Competenciaversionespecialidades Controller
 *
 * @property Competenciaversionespecialidade $Competenciaversionespecialidade
 */
class CompetenciaversionespecialidadesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Competenciaversionespecialidade->recursive = 0;
		$this->set('competenciaversionespecialidades', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Competenciaversionespecialidade->id = $id;
		if (!$this->Competenciaversionespecialidade->exists()) {
			throw new NotFoundException(__('Invalid competenciaversionespecialidade'));
		}
		$this->set('competenciaversionespecialidade', $this->Competenciaversionespecialidade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Competenciaversionespecialidade->create();
			if ($this->Competenciaversionespecialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The competenciaversionespecialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competenciaversionespecialidade could not be saved. Please, try again.'));
			}
		}
		$versionespecialidades = $this->Competenciaversionespecialidade->Versionespecialidade->find('list');
		$competencias = $this->Competenciaversionespecialidade->Competencium->find('list');
		$this->set(compact('versionespecialidades', 'competencias'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Competenciaversionespecialidade->id = $id;
		if (!$this->Competenciaversionespecialidade->exists()) {
			throw new NotFoundException(__('Invalid competenciaversionespecialidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Competenciaversionespecialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The competenciaversionespecialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competenciaversionespecialidade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Competenciaversionespecialidade->read(null, $id);
		}
		$versionespecialidades = $this->Competenciaversionespecialidade->Versionespecialidade->find('list');
		$competencias = $this->Competenciaversionespecialidade->Competencium->find('list');
		$this->set(compact('versionespecialidades', 'competencias'));
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
		$this->Competenciaversionespecialidade->id = $id;
		if (!$this->Competenciaversionespecialidade->exists()) {
			throw new NotFoundException(__('Invalid competenciaversionespecialidade'));
		}
		if ($this->Competenciaversionespecialidade->delete()) {
			$this->Session->setFlash(__('Competenciaversionespecialidade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Competenciaversionespecialidade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
