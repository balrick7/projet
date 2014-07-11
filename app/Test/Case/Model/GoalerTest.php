<?php
App::uses('Goaler', 'Model');

/**
 * Goaler Test Case
 *
 */
class GoalerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.goaler',
		'app.leagues_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Goaler = ClassRegistry::init('Goaler');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Goaler);

		parent::tearDown();
	}

}
