<?php
/* Aprendicesolicitude Test cases generated on: 2012-01-29 18:12:44 : 1327878764*/
App::uses('Aprendicesolicitude', 'Model');

/**
 * Aprendicesolicitude Test Case
 *
 */
class AprendicesolicitudeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aprendicesolicitude', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.aprendicegrupo', 'app.grupo', 'app.calificacione', 'app.conceptualaprendice', 'app.etapa', 'app.actagrupo', 'app.actainstructore', 'app.instructore', 'app.conceptualgrupo', 'app.solicitude');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Aprendicesolicitude = ClassRegistry::init('Aprendicesolicitude');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aprendicesolicitude);

		parent::tearDown();
	}

}
