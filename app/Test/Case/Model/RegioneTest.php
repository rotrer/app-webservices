<?php
App::uses('Regione', 'Model');

/**
 * Regione Test Case
 *
 */
class RegioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.regione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Regione = ClassRegistry::init('Regione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Regione);

		parent::tearDown();
	}

}
