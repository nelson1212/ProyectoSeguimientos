<?php
/* Calificacione Test cases generated on: 2012-01-29 18:19:45 : 1327879185*/
App::uses('Calificacione', 'Model');

/**
 * Calificacione Test Case
 *
 */
class CalificacioneTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.calificacione', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.aprendicegrupo', 'app.grupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.etapa', 'app.actagrupo', 'app.actainstructore', 'app.instructore', 'app.conceptualgrupo', 'app.resultadoaprendizaje', 'app.inasistencia', 'app.planemejoramiento');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Calificacione = ClassRegistry::init('Calificacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Calificacione);

		parent::tearDown();
	}

}
