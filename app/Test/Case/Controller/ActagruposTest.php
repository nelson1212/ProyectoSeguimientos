<?php
/* Actagrupos Test cases generated on: 2012-01-29 18:56:42 : 1327881402*/
App::uses('Actagrupos', 'Controller');

/**
 * TestActagrupos *
 */
class TestActagrupos extends Actagrupos {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * Actagrupos Test Case
 *
 */
class ActagruposTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Actagrupos = new TestActagrupos();
		$this->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actagrupos);

		parent::tearDown();
	}

}
