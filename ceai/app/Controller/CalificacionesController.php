<?php
App::uses('AppController', 'Controller');
/**
 * Calificaciones Controller
 *
 * @property Calificacione $Calificacione
 */
class CalificacionesController extends AppController {

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Calificacione -> recursive = 0;
		$this -> set('calificaciones', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Calificacione -> id = $id;
		if (!$this -> Calificacione -> exists()) {
			throw new NotFoundException(__('Invalid calificacione'));
		}
		$this -> set('calificacione', $this -> Calificacione -> read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			$this -> Calificacione -> create();
			if ($this -> Calificacione -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The calificacione has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The calificacione could not be saved. Please, try again.'));
			}
		}
		$actas = $this -> Calificacione -> Actum -> find('list');
		$aprendices = $this -> Calificacione -> Aprendice -> find('list');
		$resultadoaprendizajes = $this -> Calificacione -> Resultadoaprendizaje -> find('list');
		$instructores = $this -> Calificacione -> Instructore -> find('list');
		$this -> set(compact('actas', 'aprendices', 'resultadoaprendizajes', 'instructores'));
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this -> Calificacione -> id = $id;
		if (!$this -> Calificacione -> exists()) {
			throw new NotFoundException(__('Invalid calificacione'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Calificacione -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The calificacione has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The calificacione could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Calificacione -> read(null, $id);
		}
		$actas = $this -> Calificacione -> Actum -> find('list');
		$aprendices = $this -> Calificacione -> Aprendice -> find('list');
		$resultadoaprendizajes = $this -> Calificacione -> Resultadoaprendizaje -> find('list');
		$instructores = $this -> Calificacione -> Instructore -> find('list');
		$this -> set(compact('actas', 'aprendices', 'resultadoaprendizajes', 'instructores'));
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
		$this -> Calificacione -> id = $id;
		if (!$this -> Calificacione -> exists()) {
			throw new NotFoundException(__('Invalid calificacione'));
		}
		if ($this -> Calificacione -> delete()) {
			$this -> Session -> setFlash(__('Calificacione deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('Calificacione was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

	function calificarAprendiz($idAprendiz = null) {
		$this -> autoRender = false;
		$this -> layout = 'ajax';
		$datos = array();
		//print_r($_POST);
		$datos["aprobado"] = $_POST["evaluacion_aprendiz"];
		$datos["cal_num"] = $_POST["nota_aprendiz"];
		$datos["acta_id"] = $_POST["acta_id"];
		$datos["aprendice_id"] = $_POST["aprendiz_id"];
		$datos["resultadoaprendizaje_id"] = $_POST["resultado_id"];
		$datos["instructore_id"] = $_POST["instructor_id"];

		//print_r($datos);
		$data = array();

		if (!empty($datos)) {
			$this -> Calificacione -> create();
			if ($this -> Calificacione -> save($datos)) {
				$data["res"] = "si";
			} else {
				$data["res"] = "no";
			}
		} else {
			$data["res"] = "no";
		}

		echo json_encode($data);
	}

}
