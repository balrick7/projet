<?php
/**
 * AllignmentsDefenceFixture
 *
 */
class AllignmentsDefenceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'rightplayer_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'leftplayer_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'leagues_team_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_allignments_defences_teams_rightplayer_id' => array('column' => 'rightplayer_id', 'unique' => 0),
			'fk_allignments_defence_leftplayer_id' => array('column' => 'leftplayer_id', 'unique' => 0),
			'fk_allignments_defences_leagues_team_id' => array('column' => 'leagues_team_id', 'unique' => 0)
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
			'rightplayer_id' => '',
			'leftplayer_id' => '',
			'leagues_team_id' => '',
			'number' => 1
		),
	);

}
