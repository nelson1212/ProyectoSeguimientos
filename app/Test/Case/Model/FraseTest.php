<?php
/* Frase Test cases generated on: 2012-01-29 18:35:36 : 1327880136*/
App::uses('Frase', 'Model');

/**
 * Frase Test Case
 *
 */
class FraseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.frase');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Frase = ClassRegistry::init('Frase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Frase);

		parent::tearDown();
	}

}
