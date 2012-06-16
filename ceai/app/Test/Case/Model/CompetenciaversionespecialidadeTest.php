<?php
/* Competenciaversionespecialidade Test cases generated on: 2012-01-29 18:22:22 : 1327879342*/
App::uses('Competenciaversionespecialidade', 'Model');

/**
 * Competenciaversionespecialidade Test Case
 *
 */
class CompetenciaversionespecialidadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.competenciaversionespecialidade', 'app.versionespecialidade', 'app.competencia', 'app.horarioadministrativo', 'app.horarioespeciale', 'app.horario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Competenciaversionespecialidade = ClassRegistry::init('Competenciaversionespecialidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Competenciaversionespecialidade);

		parent::tearDown();
	}

}
