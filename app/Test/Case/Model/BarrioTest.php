<?php
/* Barrio Test cases generated on: 2012-01-29 18:13:11 : 1327878791*/
App::uses('Barrio', 'Model');

/**
 * Barrio Test Case
 *
 */
class BarrioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.barrio', 'app.ciudade', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.actainstructore', 'app.instructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.aprendicegrupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Barrio = ClassRegistry::init('Barrio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Barrio);

		parent::tearDown();
	}

}
