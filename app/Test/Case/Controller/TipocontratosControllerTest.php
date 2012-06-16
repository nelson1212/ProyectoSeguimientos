<?php
/* Tipocontratos Test cases generated on: 2012-01-29 19:04:50 : 1327881890*/
App::uses('TipocontratosController', 'Controller');

/**
 * TestTipocontratosController *
 */
class TestTipocontratosController extends TipocontratosController {
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
 * TipocontratosController Test Case
 *
 */
class TipocontratosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipocontrato', 'app.contrato', 'app.instructore', 'app.vinculo', 'app.centro', 'app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.versionespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.competenciaversionespecialidade', 'app.competencia', 'app.horarioadministrativo', 'app.ambiente', 'app.horarioespeciale', 'app.calendarioacademico', 'app.horario', 'app.resultadoaprendizaje', 'app.competencias', 'app.calificacione', 'app.inasistencia', 'app.planemejoramiento', 'app.resultadoproyecto', 'app.proyecto', 'app.aprendicegrupo', 'app.actainstructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Tipocontratos = new TestTipocontratosController();
		$this->Tipocontratos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipocontratos);

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
