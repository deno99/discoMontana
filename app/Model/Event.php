<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 * @property Floor $Floor
 */
class Event extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Events';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idEvent';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Floor' => array(
			'className' => 'Floor',
			'foreignKey' => 'idFloor',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
