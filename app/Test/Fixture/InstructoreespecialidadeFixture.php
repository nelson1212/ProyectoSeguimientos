<?php
/* Instructoreespecialidade Fixture generated on: 2012-01-29 18:47:06 : 1327880826 */

/**
 * InstructoreespecialidadeFixture
 *
 */
class InstructoreespecialidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'especialidade_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'instructore_id', 'especialidade_id'), 'unique' => 1), 'fk_instructores_has_especialidades_especialidades1' => array('column' => 'especialidade_id', 'unique' => 0), 'fk_instructores_has_especialidades_instructores1' => array('column' => 'instructore_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'instructore_id' => 1,
			'especialidade_id' => 1,
			'created' => '2012-01-29 18:47:06',
			'updated' => '2012-01-29 18:47:06'
		),
	);
}
