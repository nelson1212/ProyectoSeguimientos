<?php
/* Ciudades Test cases generated on: 2012-01-29 19:00:20 : 1327881620*/
App::uses('CiudadesController', 'Controller');

/**
 * TestCiudadesController *
 */
class TestCiudadesController extends CiudadesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * CiudadesController Test Case
 *
 */
class CiudadesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.versionespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.instructore', 'app.vinculo', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.resultadoaprendizaje', 'app.competencias', 'app.calificacione', 'app.inasistencia', 'app.planemejoramiento', 'app.resultadoproyecto', 'app.proyecto', 'app.actainstructore', 'app.contrato', 'app.tipocontrato', 'app.aprendicegrupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ciudades = new TestCiudadesController();
		$this->Ciudades->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ciudades);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
