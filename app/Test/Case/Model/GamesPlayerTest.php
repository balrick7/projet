<?php
App::uses('GamesPlayer', 'Model');

/**
 * GamesPlayer Test Case
 *
 */
class GamesPlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.games_player',
		'app.player',
		'app.game',
		'app.typegame',
		'app.schedule',
		'app.vleagues_team',
		'app.hleagues_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GamesPlayer = ClassRegistry::init('GamesPlayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GamesPlayer);

		parent::tearDown();
	}

}
