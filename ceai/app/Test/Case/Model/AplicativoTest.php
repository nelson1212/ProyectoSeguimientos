<?php
/* Aplicativo Test cases generated on: 2012-01-29 18:10:37 : 1327878637*/
App::uses('Aplicativo', 'Model');

/**
 * Aplicativo Test Case
 *
 */
class AplicativoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aplicativo', 'app.aplicativousuario', 'app.usuario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Aplicativo = ClassRegistry::init('Aplicativo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aplicativo);

		parent::tearDown();
	}

}
