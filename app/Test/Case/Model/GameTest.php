<?php
App::uses('Game', 'Model');

/**
 * Game Test Case
 *
 */
class GameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.game',
		'app.typegame',
		'app.schedule',
		'app.vleagues_team',
		'app.hleagues_team',
		'app.player',
		'app.games_player'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Game = ClassRegistry::init('Game');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Game);

		parent::tearDown();
	}

}
