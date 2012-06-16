<?php
/* Horario Fixture generated on: 2012-01-29 18:46:00 : 1327880760 */

/**
 * HorarioFixture
 *
 */
class HorarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'grupo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'ambiente_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'calendarioacademico_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'usuario_creador' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'hora_inicial_horario' => array('type' => 'time', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'hora_final_horario' => array('type' => 'time', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'fecha_cita_horario' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'numero_indicador_horario' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'actividad_horarios' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'competencia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'resultadoaprendizaje_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'para_final_fechas_horarios' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'grupo_id', 'instructore_id', 'ambiente_id', 'calendarioacademico_id', 'competencia_id', 'resultadoaprendizaje_id'), 'unique' => 1), 'fk_horarios_grupos1' => array('column' => 'grupo_id', 'unique' => 0), 'fk_horarios_instructores1' => array('column' => 'instructore_id', 'unique' => 0), 'fk_horarios_ambientes1' => array('column' => 'ambiente_id', 'unique' => 0), 'fk_horarios_calendario_academicos1' => array('column' => 'calendarioacademico_id', 'unique' => 0), 'fk_horarios_competencias1' => array('column' => 'competencia_id', 'unique' => 0), 'fk_horarios_resultadoaprendizajes1' => array('column' => 'resultadoaprendizaje_id', 'unique' => 0)),
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
			'grupo_id' => 1,
			'instructore_id' => 1,
			'ambiente_id' => 1,
			'calendarioacademico_id' => 1,
			'usuario_creador' => 'Lorem ipsum dolor sit amet',
			'hora_inicial_horario' => '18:46:00',
			'hora_final_horario' => '18:46:00',
			'fecha_cita_horario' => '2012-01-29',
			'numero_indicador_horario' => 1,
			'actividad_horarios' => 'Lorem ipsum dolor sit amet',
			'competencia_id' => 1,
			'resultadoaprendizaje_id' => 1,
			'para_final_fechas_horarios' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-01-29 18:46:00',
			'updated' => '2012-01-29 18:46:00'
		),
	);
}
