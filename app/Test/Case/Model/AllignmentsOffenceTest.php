<?php
App::uses('AllignmentsOffence', 'Model');

/**
 * AllignmentsOffence Test Case
 *
 */
class AllignmentsOffenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.allignments_offence',
		'app.leagues_team',
		'app.rightplayer',
		'app.centerplayer',
		'app.leftplayer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AllignmentsOffence = ClassRegistry::init('AllignmentsOffence');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AllignmentsOffence);

		parent::tearDown();
	}

}
