<?php
/* Acudienteaprendice Test cases generated on: 2012-01-29 18:07:51 : 1327878471*/
App::uses('Acudienteaprendice', 'Model');

/**
 * Acudienteaprendice Test Case
 *
 */
class AcudienteaprendiceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.acudienteaprendice', 'app.aprendice', 'app.acudiente');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Acudienteaprendice = ClassRegistry::init('Acudienteaprendice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acudienteaprendice);

		parent::tearDown();
	}

}
