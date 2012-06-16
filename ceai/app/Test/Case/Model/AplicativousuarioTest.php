<?php
/* Aplicativousuario Test cases generated on: 2012-01-29 18:10:14 : 1327878614*/
App::uses('Aplicativousuario', 'Model');

/**
 * Aplicativousuario Test Case
 *
 */
class AplicativousuarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aplicativousuario', 'app.usuario', 'app.aplicativo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Aplicativousuario = ClassRegistry::init('Aplicativousuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aplicativousuario);

		parent::tearDown();
	}

}
