<?php
/* Calificacione Fixture generated on: 2012-01-29 18:15:00 : 1327878900 */

/**
 * CalificacioneFixture
 *
 */
class CalificacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aprobado' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4, 'collate' => NULL, 'comment' => ''),
		'cal_num' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Valor numerico de la calificaicón', 'charset' => 'latin1'),
		'acta_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aprendice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'total_horas_excusadas' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'total_horas_noexcusadas' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'resultadoaprendizaje_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'acta_id', 'aprendice_id', 'instructore_id', 'resultadoaprendizaje_id'), 'unique' => 1), 'fk_calificaciones_aprendices1' => array('column' => 'aprendice_id', 'unique' => 0), 'fk_calificaciones_actas1' => array('column' => 'acta_id', 'unique' => 0), 'fk_calificaciones_instructores1' => array('column' => 'instructore_id', 'unique' => 0), 'fk_calificaciones_resultadoaprendizajes1' => array('column' => 'resultadoaprendizaje_id', 'unique' => 0)),
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
			'aprobado' => 1,
			'cal_num' => 'Lorem ipsum dolor sit amet',
			'acta_id' => 1,
			'aprendice_id' => 1,
			'total_horas_excusadas' => 'Lorem ipsum dolor sit amet',
			'total_horas_noexcusadas' => 'Lorem ipsum dolor sit amet',
			'instructore_id' => 1,
			'created' => '2012-01-29 18:15:00',
			'updated' => '2012-01-29 18:15:00',
			'resultadoaprendizaje_id' => 1
		),
	);
}
