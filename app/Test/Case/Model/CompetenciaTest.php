<?php
/* Competencia Test cases generated on: 2012-01-29 18:21:57 : 1327879317*/
App::uses('Competencia', 'Model');

/**
 * Competencia Test Case
 *
 */
class CompetenciaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.competencia', 'app.competenciaversionespecialidade', 'app.horarioadministrativo', 'app.horarioespeciale', 'app.horario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Competencia = ClassRegistry::init('Competencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Competencia);

		parent::tearDown();
	}

}
