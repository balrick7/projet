<?php
App::uses('LeaguesTeam', 'Model');

/**
 * LeaguesTeam Test Case
 *
 */
class LeaguesTeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.leagues_team',
		'app.team',
		'app.league',
		'app.allignments_defence',
		'app.rightplayer',
		'app.leftplayer',
		'app.allignments_offence',
		'app.centerplayer',
		'app.goaler',
		'app.player',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LeaguesTeam = ClassRegistry::init('LeaguesTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LeaguesTeam);

		parent::tearDown();
	}

}
