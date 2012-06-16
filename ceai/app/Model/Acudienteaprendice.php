<?php
App::uses('AppModel', 'Model');
/**
 * Acudienteaprendice Model
 *
 * @property Aprendice $Aprendice
 * @property Acudiente $Acudiente
 */
class Acudienteaprendice extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'int';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'int';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'int' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aprendice_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'acudiente_id' => array(
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
		'Aprendice' => array(
			'className' => 'Aprendice',
			'foreignKey' => 'aprendice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Acudiente' => array(
			'className' => 'Acudiente',
			'foreignKey' => 'acudiente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
