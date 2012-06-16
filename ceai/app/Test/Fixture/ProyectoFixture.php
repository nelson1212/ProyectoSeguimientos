<?php
/* Proyecto Fixture generated on: 2012-01-29 18:49:06 : 1327880946 */

/**
 * ProyectoFixture
 *
 */
class ProyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'nombre_proyecto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'descripcion_proyecto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'ruta_proyecto_url' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'grupo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'grupo_id'), 'unique' => 1), 'fk_proyectos_grupos1' => array('column' => 'grupo_id', 'unique' => 0)),
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
			'nombre_proyecto' => 'Lorem ipsum dolor sit amet',
			'descripcion_proyecto' => 'Lorem ipsum dolor sit amet',
			'ruta_proyecto_url' => 'Lorem ipsum dolor sit amet',
			'grupo_id' => 1,
			'created' => '2012-01-29 18:49:06',
			'updated' => '2012-01-29 18:49:06'
		),
	);
}
