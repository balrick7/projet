<?php
App::uses('Typegame', 'Model');

/**
 * Typegame Test Case
 *
 */
class TypegameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typegame',
		'app.game',
		'app.schedule',
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
		$this->Typegame = ClassRegistry::init('Typegame');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typegame);

		parent::tearDown();
	}

}
