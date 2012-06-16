<?php
App::uses('AppController', 'Controller');
/**
 * Conceptualaprendices Controller
 *
 * @property Conceptualaprendice $Conceptualaprendice
 */
class ConceptualaprendicesController extends AppController {

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Conceptualaprendice -> recursive = 0;
		$this -> set('conceptualaprendices', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Conceptualaprendice -> id = $id;
		if (!$this -> Conceptualaprendice -> exists()) {
			throw new NotFoundException(__('Invalid conceptualaprendice'));
		}
		$this -> set('conceptualaprendice', $this -> Conceptualaprendice -> read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			$this -> Conceptualaprendice -> create();
			if ($this -> Conceptualaprendice -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The conceptualaprendice has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The conceptualaprendice could not be saved. Please, try again.'));
			}
		}
		$aprendices = $this -> Conceptualaprendice -> Aprendice -> find('list');
		$actas = $this -> Conceptualaprendice -> Actum -> find('list');
		$this -> set(compact('aprendices', 'actas'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function agregarConcepto() {

		$this -> layout = "";
		$this -> autoRender = false;
		$res = array();

		if ($this -> request -> is('post')) {
			$existeConcepto = $this -> Conceptualaprendice -> find("list", array('fields' => array("concepto"), "conditions" => array("Conceptualaprendice.aprendice_id" => $_POST['aprendiz'], 'Conceptualaprendice.acta_id' => $_POST['acta'])));
			$idConcepto = "";
			$concepto = "";

			foreach ($existeConcepto as $key => $value) {
				$idConcepto = $key;
				$concepto = $value;
			}
			
			$data = array();
			if (empty($existeConcepto)) {
				$this -> Conceptualaprendice -> create();
				$data["Conceptualaprendice"]["aprendice_id"] = $_POST['aprendiz'];
				$data["Conceptualaprendice"]["acta_id"] = $_POST['acta'];
				$data["Conceptualaprendice"]["concepto"] = $_POST['concep'];
			} else {
				$this -> Conceptualaprendice -> id = $idConcepto;
				$data["Conceptualaprendice"]["concepto"] = $_POST['concep'];
			}

			if ($this -> Conceptualaprendice -> save($data)) {
				$res["res"] = "si";
			} else {
				$res["res"] = "no";
			}
		}

		echo json_encode($res);
	}

	function cargarConcepto(){
		$this -> layout = "";
		$this -> autoRender = false;
		$res = array();

		if ($this -> request -> is('post')) {
			$existeConcepto = $this -> Conceptualaprendice -> find("list", array('fields' => array("concepto"), "conditions" => array("Conceptualaprendice.aprendice_id" => $_POST['aprendiz'], 'Conceptualaprendice.acta_id' => $_POST['acta'])));
			$idConcepto = "";
			$concepto = "";
			
			if(!empty($existeConcepto)){
				foreach ($existeConcepto as $key => $value) {
					$idConcepto = $key;
					$concepto = $value;
				}
				
				$res["res"] = "si";
				$res["id"] = $idConcepto;
				$res["concepto"] = $concepto;
			} else {
				$res["res"] = "no";
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
		$this -> Conceptualaprendice -> id = $id;
		if (!$this -> Conceptualaprendice -> exists()) {
			throw new NotFoundException(__('Invalid conceptualaprendice'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Conceptualaprendice -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The conceptualaprendice has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The conceptualaprendice could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Conceptualaprendice -> read(null, $id);
		}
		$aprendices = $this -> Conceptualaprendice -> Aprendice -> find('list');
		$actas = $this -> Conceptualaprendice -> Actum -> find('list');
		$this -> set(compact('aprendices', 'actas'));
	}

	/**
	 * delete method
	 *
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		if (!$this -> request -> is('post')) {
			throw new MethodNotAllowedException();
		}
		$this -> Conceptualaprendice -> id = $id;
		if (!$this -> Conceptualaprendice -> exists()) {
			throw new NotFoundException(__('Invalid conceptualaprendice'));
		}
		if ($this -> Conceptualaprendice -> delete()) {
			$this -> Session -> setFlash(__('Conceptualaprendice deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('Conceptualaprendice was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

}
