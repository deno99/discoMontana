<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
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

}
