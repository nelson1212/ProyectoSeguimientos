<?php
/* Resultadoproyecto Fixture generated on: 2012-01-29 18:53:42 : 1327881222 */

/**
 * ResultadoproyectoFixture
 *
 */
class ResultadoproyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'proyecto_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'resultadoaprendizaje_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'actividad_matriz' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'trimestre_matriz' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'codigo_guia' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'fecha_inicio_matriz' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'fecha_final_matriz' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'proyecto_id', 'instructore_id', 'resultadoaprendizaje_id'), 'unique' => 1), 'fk_resultadoproyectos_proyectos1' => array('column' => 'proyecto_id', 'unique' => 0), 'fk_resultadoproyectos_instructores1' => array('column' => 'instructore_id', 'unique' => 0), 'fk_resultadoproyectos_resultadoaprendizajes1' => array('column' => 'resultadoaprendizaje_id', 'unique' => 0)),
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
			'proyecto_id' => 1,
			'instructore_id' => 1,
			'resultadoaprendizaje_id' => 1,
			'actividad_matriz' => 'Lorem ipsum dolor sit amet',
			'trimestre_matriz' => 1,
			'codigo_guia' => 'Lorem ipsum dolor sit amet',
			'fecha_inicio_matriz' => '2012-01-29',
			'fecha_final_matriz' => '2012-01-29',
			'created' => '2012-01-29 18:53:42',
			'updated' => '2012-01-29 18:53:42'
		),
	);
}
