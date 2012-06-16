<?php
App::uses('AppController', 'Controller');
/**
 * Instructoreespecialidades Controller
 *
 * @property Instructoreespecialidade $Instructoreespecialidade
 */
class InstructoreespecialidadesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instructoreespecialidade->recursive = 0;
		$this->set('instructoreespecialidades', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Instructoreespecialidade->id = $id;
		if (!$this->Instructoreespecialidade->exists()) {
			throw new NotFoundException(__('Invalid instructoreespecialidade'));
		}
		$this->set('instructoreespecialidade', $this->Instructoreespecialidade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instructoreespecialidade->create();
			if ($this->Instructoreespecialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The instructoreespecialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructoreespecialidade could not be saved. Please, try again.'));
			}
		}
		$instructores = $this->Instructoreespecialidade->Instructore->find('list');
		$especialidades = $this->Instructoreespecialidade->Especialidade->find('list');
		$this->set(compact('instructores', 'especialidades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Instructoreespecialidade->id = $id;
		if (!$this->Instructoreespecialidade->exists()) {
			throw new NotFoundException(__('Invalid instructoreespecialidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instructoreespecialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The instructoreespecialidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructoreespecialidade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Instructoreespecialidade->read(null, $id);
		}
		$instructores = $this->Instructoreespecialidade->Instructore->find('list');
		$especialidades = $this->Instructoreespecialidade->Especialidade->find('list');
		$this->set(compact('instructores', 'especialidades'));
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
		$this->Instructoreespecialidade->id = $id;
		if (!$this->Instructoreespecialidade->exists()) {
			throw new NotFoundException(__('Invalid instructoreespecialidade'));
		}
		if ($this->Instructoreespecialidade->delete()) {
			$this->Session->setFlash(__('Instructoreespecialidade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instructoreespecialidade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
