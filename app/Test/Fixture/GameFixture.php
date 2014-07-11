<?php
/**
 * GameFixture
 *
 */
class GameFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'typegame_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'schedule_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'vleagues_team_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'hleagues_team_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'vscore' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hscore' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hshoot' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'vshoot' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_games_typegame_id' => array('column' => 'typegame_id', 'unique' => 0),
			'fk_games_schedule_id' => array('column' => 'schedule_id', 'unique' => 0),
			'fk_games_vleagues_team_id' => array('column' => 'vleagues_team_id', 'unique' => 0),
			'fk_games_hleagues_team_id' => array('column' => 'hleagues_team_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'typegame_id' => '',
			'schedule_id' => '',
			'vleagues_team_id' => '',
			'hleagues_team_id' => '',
			'vscore' => 1,
			'hscore' => 1,
			'hshoot' => 1,
			'vshoot' => 1
		),
	);

}
