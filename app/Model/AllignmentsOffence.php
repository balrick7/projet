<?php
App::uses('AppModel', 'Model');
/**
 * AllignmentsOffence Model
 *
 * @property LeaguesTeam $LeaguesTeam
 * @property Rightplayer $Rightplayer
 * @property Centerplayer $Centerplayer
 * @property Leftplayer $Leftplayer
 */
class AllignmentsOffence extends AppModel {

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
		'LeaguesTeam' => array(
			'className' => 'LeaguesTeam',
			'foreignKey' => 'leagues_team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rightplayer' => array(
			'className' => 'Player',
			'foreignKey' => 'rightplayer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Centerplayer' => array(
			'className' => 'Player',
			'foreignKey' => 'centerplayer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Leftplayer' => array(
			'className' => 'Player',
			'foreignKey' => 'leftplayer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
