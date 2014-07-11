<?php
App::uses('Player', 'Model');

/**
 * Player Test Case
 *
 */
class PlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Player = ClassRegistry::init('Player');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Player);

		parent::tearDown();
	}

}
