<?php
/* Acta Test cases generated on: 2012-01-29 18:07:06 : 1327878426*/
App::uses('Acta', 'Model');

/**
 * Acta Test Case
 *
 */
class ActaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.acta', 'app.trimestre', 'app.aprendice', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.actainstructore', 'app.instructore', 'app.aprendicesolicitude', 'app.calificacione', 'app.conceptualaprendice', 'app.conceptualgrupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Acta = ClassRegistry::init('Acta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acta);

		parent::tearDown();
	}

}
