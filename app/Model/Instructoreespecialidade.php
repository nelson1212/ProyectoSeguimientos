<?php
App::uses('AppModel', 'Model');
/**
 * Instructoreespecialidade Model
 *
 * @property Instructore $Instructore
 * @property Especialidade $Especialidade
 */
class Instructoreespecialidade extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'instructore_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'especialidade_id' => array(
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
		'Instructore' => array(
			'className' => 'Instructore',
			'foreignKey' => 'instructore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Especialidade' => array(
			'className' => 'Especialidade',
			'foreignKey' => 'especialidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
