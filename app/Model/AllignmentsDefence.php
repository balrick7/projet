<?php
App::uses('AppModel', 'Model');
/**
 * AllignmentsDefence Model
 *
 * @property Rightplayer $Rightplayer
 * @property Leftplayer $Leftplayer
 * @property LeaguesTeam $LeaguesTeam
 */
class AllignmentsDefence extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rightplayer' => array(
			'className' => 'Player',
			'foreignKey' => 'player_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Leftplayer' => array(
			'className' => 'Player',
			'foreignKey' => 'player_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LeaguesTeam' => array(
			'className' => 'LeaguesTeam',
			'foreignKey' => 'leagues_team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
