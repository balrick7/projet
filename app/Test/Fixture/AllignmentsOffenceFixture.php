<?php
/**
 * AllignmentsOffenceFixture
 *
 */
class AllignmentsOffenceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'leagues_team_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'rightplayer_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'centerplayer_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'leftplayer_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_allignments_offence_rplayer_id' => array('column' => 'rightplayer_id', 'unique' => 0),
			'fk_allignments_offence_cplayers_id' => array('column' => 'centerplayer_id', 'unique' => 0),
			'fk_allignments_offence_lplayer_id' => array('column' => 'leftplayer_id', 'unique' => 0),
			'fk_allignments_offence_leagues_team_id' => array('column' => 'leagues_team_id', 'unique' => 0)
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
			'leagues_team_id' => '',
			'rightplayer_id' => '',
			'centerplayer_id' => '',
			'leftplayer_id' => '',
			'number' => 1
		),
	);

}
