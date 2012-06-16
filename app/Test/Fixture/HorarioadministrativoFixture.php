<?php
/* Horarioadministrativo Fixture generated on: 2012-01-29 18:40:58 : 1327880458 */

/**
 * HorarioadministrativoFixture
 *
 */
class HorarioadministrativoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'grupo_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'ambiente_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'calendario_academico_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'usuario_creador' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'hora_inicial_horario' => array('type' => 'time', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'hora_final_horario' => array('type' => 'time', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'fecha_cita_horario' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'numero_indicador_horario' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'actividad_horarios' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'competencia_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'resultados_aprendizaje' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'para_final_fechas_horarios' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'instructore_id'), 'unique' => 1), 'fk_horarios_administrativos_instructores1' => array('column' => 'instructore_id', 'unique' => 0)),
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
			'grupo_id' => 'Lorem ipsum dolor sit amet',
			'instructore_id' => 1,
			'ambiente_id' => 'Lorem ipsum dolor sit amet',
			'calendario_academico_id' => 'Lorem ipsum dolor sit amet',
			'usuario_creador' => 'Lorem ipsum dolor sit amet',
			'hora_inicial_horario' => '18:40:58',
			'hora_final_horario' => '18:40:58',
			'fecha_cita_horario' => '2012-01-29',
			'numero_indicador_horario' => 'Lorem ipsum dolor sit amet',
			'actividad_horarios' => 'Lorem ipsum dolor sit amet',
			'competencia_id' => 'Lorem ipsum dolor sit amet',
			'resultados_aprendizaje' => 'Lorem ipsum dolor sit amet',
			'para_final_fechas_horarios' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-01-29 18:40:58',
			'updated' => '2012-01-29 18:40:58'
		),
	);
}
