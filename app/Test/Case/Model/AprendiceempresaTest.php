<?php
/* Aprendiceempresa Test cases generated on: 2012-01-29 18:11:00 : 1327878660*/
App::uses('Aprendiceempresa', 'Model');

/**
 * Aprendiceempresa Test Case
 *
 */
class AprendiceempresaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aprendiceempresa', 'app.aprendice', 'app.empresa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Aprendiceempresa = ClassRegistry::init('Aprendiceempresa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aprendiceempresa);

		parent::tearDown();
	}

}
