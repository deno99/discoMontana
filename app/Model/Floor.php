<?php
App::uses('AppModel', 'Model');
/**
 * Floor Model
 *
 */
class Floor extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Floors';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idFloor';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
