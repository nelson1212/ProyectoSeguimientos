<?php
/* Actainstructore Test cases generated on: 2012-01-29 18:05:15 : 1327878315*/
App::uses('Actainstructore', 'Model');

/**
 * Actainstructore Test Case
 *
 */
class ActainstructoreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.actainstructore', 'app.acta', 'app.instructore');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Actainstructore = ClassRegistry::init('Actainstructore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actainstructore);

		parent::tearDown();
	}

}
