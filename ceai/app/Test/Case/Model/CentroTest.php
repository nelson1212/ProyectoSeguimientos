<?php
/* Centro Test cases generated on: 2012-01-29 18:21:01 : 1327879261*/
App::uses('Centro', 'Model');

/**
 * Centro Test Case
 *
 */
class CentroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.centro', 'app.ciudade', 'app.ambiente', 'app.horarioadministrativo', 'app.horarioespeciale', 'app.horario', 'app.instructore');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Centro = ClassRegistry::init('Centro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Centro);

		parent::tearDown();
	}

}
