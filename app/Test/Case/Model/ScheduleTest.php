<?php
App::uses('Schedule', 'Model');

/**
 * Schedule Test Case
 *
 */
class ScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.schedule',
		'app.game',
		'app.typegame',
		'app.vleagues_team',
		'app.hleagues_team',
		'app.player',
		'app.position',
		'app.leagues_team',
		'app.team',
		'app.league',
		'app.allignments_defence',
		'app.rightplayer',
		'app.leftplayer',
		'app.allignments_offence',
		'app.centerplayer',
		'app.goaler',
		'app.user',
		'app.games_player'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Schedule = ClassRegistry::init('Schedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Schedule);

		parent::tearDown();
	}

}
