<?php
/* Planemejoramiento Fixture generated on: 2012-01-29 18:48:29 : 1327880909 */

/**
 * PlanemejoramientoFixture
 *
 */
class PlanemejoramientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'calificacione_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'resultado_numerico' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'observaciones' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'aprobado' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4, 'collate' => NULL, 'comment' => ''),
		'fecha_entrega' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'calificacione_id'), 'unique' => 1), 'fk_planes_mejoramientos_calificaciones1' => array('column' => 'calificacione_id', 'unique' => 0)),
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
			'calificacione_id' => 1,
			'resultado_numerico' => 'Lorem ipsum dolor sit amet',
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'aprobado' => 1,
			'fecha_entrega' => '2012-01-29 18:48:29',
			'created' => '2012-01-29 18:48:29',
			'updated' => '2012-01-29 18:48:29'
		),
	);
}
