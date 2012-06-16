<?php
App::uses('AppModel', 'Model');
/**
 * Competenciaversionespecialidade Model
 *
 * @property Versionespecialidade $Versionespecialidade
 * @property Competencia $Competencia
 */
class Competenciaversionespecialidade extends AppModel {
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
		'versionespecialidade_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'competencia_id' => array(
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
		'Versionespecialidade' => array(
			'className' => 'Versionespecialidade',
			'foreignKey' => 'versionespecialidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Competencia' => array(
			'className' => 'Competencia',
			'foreignKey' => 'competencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
