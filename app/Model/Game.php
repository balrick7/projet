<?php
App::uses('AppModel', 'Model');
/**
 * Game Model
 *
 * @property Typegame $Typegame
 * @property Schedule $Schedule
 * @property VleaguesTeam $VleaguesTeam
 * @property HleaguesTeam $HleaguesTeam
 * @property Player $Player
 */
class Game extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Typegame' => array(
			'className' => 'Typegame',
			'foreignKey' => 'typegame_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Schedule' => array(
			'className' => 'Schedule',
			'foreignKey' => 'schedule_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'VleaguesTeam' => array(
			'className' => 'LeaguesTeam',
			'foreignKey' => 'vleagues_team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HleaguesTeam' => array(
			'className' => 'LeaguesTeam',
			'foreignKey' => 'hleagues_team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Player' => array(
			'className' => 'Player',
			'joinTable' => 'games_players',
			'foreignKey' => 'game_id',
			'associationForeignKey' => 'player_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
