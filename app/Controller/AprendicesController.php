<?php
App::uses('AppController', 'Controller');
/**
 * Aprendices Controller
 *
 * @property Aprendice $Aprendice
 */
class AprendicesController extends AppController {

	var $uses = array("Aprendice", "Ciudade");
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Aprendice -> recursive = 0;
		$this -> set('aprendices', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Aprendice -> id = $id;
		if (!$this -> Aprendice -> exists()) {
			throw new NotFoundException(__('Invalid aprendice'));
		}
		$this -> set('aprendice', $this -> Aprendice -> read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {

		$this -> layout = "principal";
		if ($this -> request -> is('post')) {
			$this -> Aprendice -> create();
			if ($this -> Aprendice -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The aprendice has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The aprendice could not be saved. Please, try again.'));
			}
		}
		$barrios = $this -> Aprendice -> Barrio -> find('list', array("fields" => array("id", "nombre")));
		$ciudades = $this -> Ciudade -> find('list', array("fields" => array("id", "nombre")));
		$this -> set(compact('barrios', "ciudades"));
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this -> Aprendice -> id = $id;
		if (!$this -> Aprendice -> exists()) {
			throw new NotFoundException(__('Invalid aprendice'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Aprendice -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The aprendice has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The aprendice could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Aprendice -> read(null, $id);
		}
		$barrios = $this -> Aprendice -> Barrio -> find('list');
		$this -> set(compact('barrios'));
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
		$this -> Aprendice -> id = $id;
		if (!$this -> Aprendice -> exists()) {
			throw new NotFoundException(__('Invalid aprendice'));
		}
		if ($this -> Aprendice -> delete()) {
			$this -> Session -> setFlash(__('Aprendice deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('Aprendice was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

	function obtenerAprendices() {
		$this -> autoRender = false;
		$this -> layout = 'ajax';
		$idActa = $_POST["id_acta"];
		$idGrupo = $_POST["id_grupo"];

		$this->loadModel("Aprendicegrupo");
		$aprendices = $this->Aprendicegrupo->find("all", array("conditions"=>array("Aprendicegrupo.grupo_id"=>$idGrupo)));
		print_r($aprendices);
		echo json_encode($aprendices);
	}

}
