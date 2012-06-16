<?php
/* Actagrupo Test cases generated on: 2012-01-29 18:04:43 : 1327878283*/
App::uses('Actagrupo', 'Model');

/**
 * Actagrupo Test Case
 *
 */
class ActagrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.actagrupo', 'app.acta', 'app.grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Actagrupo = ClassRegistry::init('Actagrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actagrupo);

		parent::tearDown();
	}

}
