<?php
/* Acudientes Test cases generated on: 2012-01-29 18:57:47 : 1327881467*/
App::uses('Acudientes', 'Controller');

/**
 * TestAcudientes *
 */
class TestAcudientes extends Acudientes {
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
 * Acudientes Test Case
 *
 */
class AcudientesTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.acudienteaprendice', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.instructore', 'app.vinculo', 'app.actainstructore', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.competencias', 'app.horario', 'app.calendarioacademico', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.resultadoproyecto', 'app.proyecto', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.contrato', 'app.tipocontrato', 'app.aprendicegrupo', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.acudiente');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Acudientes = new TestAcudientes();
		$this->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acudientes);

		parent::tearDown();
	}

}
