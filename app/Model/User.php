<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
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
