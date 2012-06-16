<?php
/* Conceptualgrupo Test cases generated on: 2012-01-29 18:23:19 : 1327879399*/
App::uses('Conceptualgrupo', 'Model');

/**
 * Conceptualgrupo Test Case
 *
 */
class ConceptualgrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.conceptualgrupo', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.horarioespeciale', 'app.horario', 'app.instructore', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.aprendicegrupo', 'app.grupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.etapa', 'app.actagrupo', 'app.actainstructore');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Conceptualgrupo = ClassRegistry::init('Conceptualgrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conceptualgrupo);

		parent::tearDown();
	}

}
