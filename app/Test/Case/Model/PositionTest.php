<?php
App::uses('Position', 'Model');

/**
 * Position Test Case
 *
 */
class PositionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.position',
		'app.player',
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
		'app.game',
		'app.typegame',
		'app.schedule',
		'app.vleagues_team',
		'app.hleagues_team',
		'app.games_player'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Position = ClassRegistry::init('Position');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Position);

		parent::tearDown();
	}

}
