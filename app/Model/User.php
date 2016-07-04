<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Event $Event
 */
class User extends AppModel {

public function beforeSave($options = array()) {
         // if ID is not set, we're inserting a new user as opposed to updating
         $passwordHasher = new BlowfishPasswordHasher();
         $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
     return true;
   }


/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Users';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'users_events',
			'foreignKey' => 'idUser',
			'associationForeignKey' => 'idEvent',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	 public $validate = array(
				'username' => array(
						'required' => array(
								'rule' => 'notBlank',
								'message' => 'A username is required'
						)
				),
				'password' => array(
						'required' => array(
								'rule' => 'notBlank',
								'message' => 'A password is required'
						)
				),
				'role' => array(
						'valid' => array(
								'rule' => array('inList', array('admin', 'barman','entry','guest')),
								'message' => 'Please enter a valid role',
								'allowEmpty' => false
						)
				)
		);
	}
