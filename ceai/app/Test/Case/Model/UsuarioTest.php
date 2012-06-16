<?php
/* Usuario Test cases generated on: 2012-01-29 18:55:25 : 1327881325*/
App::uses('Usuario', 'Model');

/**
 * Usuario Test Case
 *
 */
class UsuarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.usuario', 'app.aplicativousuario', 'app.aplicativo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Usuario = ClassRegistry::init('Usuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuario);

		parent::tearDown();
	}

}
