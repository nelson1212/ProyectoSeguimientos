<?php
/* Aprendice Test cases generated on: 2012-01-29 18:12:17 : 1327878737*/
App::uses('Aprendice', 'Model');

/**
 * Aprendice Test Case
 *
 */
class AprendiceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aprendice', 'app.barrio', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.actainstructore', 'app.instructore', 'app.aprendicesolicitude', 'app.calificacione', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.aprendicegrupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Aprendice = ClassRegistry::init('Aprendice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aprendice);

		parent::tearDown();
	}

}
