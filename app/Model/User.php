<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
	public $validate = array(
			'name' => array('alphaNumeric'=>array('rule'=>'alphaNumeric', 'required'=>true, 'allowEmpty'=>false, 'message'=>'Este campo es requerido')),
			'username' => array('alphaNumeric'=>array('rule'=>'alphaNumeric', 'required'=>true, 'allowEmpty'=>false)),
			'password' => array('alphaNumeric'=>array('rule'=>'alphaNumeric', 'required'=>true, 'allowEmpty'=>false)),
	);
}
