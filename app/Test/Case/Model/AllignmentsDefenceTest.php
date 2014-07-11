<?php
App::uses('AllignmentsDefence', 'Model');

/**
 * AllignmentsDefence Test Case
 *
 */
class AllignmentsDefenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.allignments_defence',
		'app.rightplayer',
		'app.leftplayer',
		'app.leagues_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AllignmentsDefence = ClassRegistry::init('AllignmentsDefence');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AllignmentsDefence);

		parent::tearDown();
	}

}
