<?php
/* Aprendicegrupo Test cases generated on: 2012-01-29 18:11:27 : 1327878687*/
App::uses('Aprendicegrupo', 'Model');

/**
 * Aprendicegrupo Test Case
 *
 */
class AprendicegrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aprendicegrupo', 'app.grupo', 'app.aprendice');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Aprendicegrupo = ClassRegistry::init('Aprendicegrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aprendicegrupo);

		parent::tearDown();
	}

}
