<?php
/* Contrato Test cases generated on: 2012-01-29 18:29:11 : 1327879751*/
App::uses('Contrato', 'Model');

/**
 * Contrato Test Case
 *
 */
class ContratoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contrato', 'app.instructore', 'app.tipocontrato');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Contrato = ClassRegistry::init('Contrato');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contrato);

		parent::tearDown();
	}

}
