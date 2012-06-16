<?php
/* Especialidade Test cases generated on: 2012-01-29 18:34:47 : 1327880087*/
App::uses('Especialidade', 'Model');

/**
 * Especialidade Test Case
 *
 */
class EspecialidadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.versionespecialidade');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Especialidade = ClassRegistry::init('Especialidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Especialidade);

		parent::tearDown();
	}

}
