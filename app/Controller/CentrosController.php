<?php
App::uses('AppController', 'Controller');
/**
 * Centros Controller
 *
 * @property Centro $Centro
 */
class CentrosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Centro->recursive = 0;
		$this->set('centros', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Centro->id = $id;
		if (!$this->Centro->exists()) {
			throw new NotFoundException(__('Invalid centro'));
		}
		$this->set('centro', $this->Centro->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Centro->create();
			if ($this->Centro->save($this->request->data)) {
				$this->Session->setFlash(__('The centro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centro could not be saved. Please, try again.'));
			}
		}
		$ciudades = $this->Centro->Ciudade->find('list');
		$this->set(compact('ciudades'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Centro->id = $id;
		if (!$this->Centro->exists()) {
			throw new NotFoundException(__('Invalid centro'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Centro->save($this->request->data)) {
				$this->Session->setFlash(__('The centro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centro could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Centro->read(null, $id);
		}
		$ciudades = $this->Centro->Ciudade->find('list');
		$this->set(compact('ciudades'));
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
		$this->Centro->id = $id;
		if (!$this->Centro->exists()) {
			throw new NotFoundException(__('Invalid centro'));
		}
		if ($this->Centro->delete()) {
			$this->Session->setFlash(__('Centro deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Centro was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
