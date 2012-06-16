<?php
/* Instructoreespecialidade Test cases generated on: 2012-01-29 18:47:06 : 1327880826*/
App::uses('Instructoreespecialidade', 'Model');

/**
 * Instructoreespecialidade Test Case
 *
 */
class InstructoreespecialidadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.instructoreespecialidade', 'app.instructore', 'app.especialidade', 'app.tipoformacione', 'app.versionespecialidade');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Instructoreespecialidade = ClassRegistry::init('Instructoreespecialidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Instructoreespecialidade);

		parent::tearDown();
	}

}
