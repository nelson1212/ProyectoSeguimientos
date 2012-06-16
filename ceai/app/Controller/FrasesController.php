<?php
App::uses('AppController', 'Controller');
/**
 * Frases Controller
 *
 * @property Frase $Frase
 */
class FrasesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Frase->recursive = 0;
		$this->set('frases', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Frase->id = $id;
		if (!$this->Frase->exists()) {
			throw new NotFoundException(__('Invalid frase'));
		}
		$this->set('frase', $this->Frase->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Frase->create();
			if ($this->Frase->save($this->request->data)) {
				$this->Session->setFlash(__('The frase has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frase could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function agregarFrase() {
		$this->layout="";
		$this->autoRender=false;
		$res=array();
			if ($this->request->is('post')) {
				$this->Frase->create();
				if ($this->Frase->save($this->request->data)) {
					$res["res"]="si";
					$res["id"] = $this->Frase->id;
				} else {
					$res["res"]="no";
				}
			}
			
			echo json_encode($res);
		}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Frase->id = $id;
		if (!$this->Frase->exists()) {
			throw new NotFoundException(__('Invalid frase'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Frase->save($this->request->data)) {
				$this->Session->setFlash(__('The frase has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frase could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Frase->read(null, $id);
		}
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
		$this->Frase->id = $id;
		if (!$this->Frase->exists()) {
			throw new NotFoundException(__('Invalid frase'));
		}
		if ($this->Frase->delete()) {
			$this->Session->setFlash(__('Frase deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Frase was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
