<?php
/* Ciudade Test cases generated on: 2012-01-29 18:21:22 : 1327879282*/
App::uses('Ciudade', 'Model');

/**
 * Ciudade Test Case
 *
 */
class CiudadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.actainstructore', 'app.instructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.aprendicegrupo', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.horarioespeciale', 'app.horario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ciudade = ClassRegistry::init('Ciudade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ciudade);

		parent::tearDown();
	}

}
