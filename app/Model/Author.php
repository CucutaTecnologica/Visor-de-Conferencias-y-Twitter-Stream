<?php
App::uses('AppModel', 'Model');
/**
 * Author Model
 *
 * @property Conference $Conference
 */
class Author extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Conference' => array(
			'className' => 'Conference',
			'foreignKey' => 'author_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
