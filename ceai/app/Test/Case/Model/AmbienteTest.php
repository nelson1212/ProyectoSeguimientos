<?php
/* Ambiente Test cases generated on: 2012-01-29 18:09:52 : 1327878592*/
App::uses('Ambiente', 'Model');

/**
 * Ambiente Test Case
 *
 */
class AmbienteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ambiente', 'app.centro', 'app.horarioadministrativo', 'app.horarioespeciale', 'app.horario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ambiente = ClassRegistry::init('Ambiente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ambiente);

		parent::tearDown();
	}

}
