<?php
/* Calendarioacademico Test cases generated on: 2012-01-29 18:13:37 : 1327878817*/
App::uses('Calendarioacademico', 'Model');

/**
 * Calendarioacademico Test Case
 *
 */
class CalendarioacademicoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.calendarioacademico', 'app.horario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Calendarioacademico = ClassRegistry::init('Calendarioacademico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Calendarioacademico);

		parent::tearDown();
	}

}
