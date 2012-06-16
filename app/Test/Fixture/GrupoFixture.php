<?php
/* Grupo Fixture generated on: 2012-01-29 18:39:12 : 1327880352 */

/**
 * GrupoFixture
 *
 */
class GrupoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'nombre de las siglas + el consecutivo', 'charset' => 'latin1'),
		'consecutivo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'fecha_inicial' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'fecha_final' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'versionespecialidade_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'numero_ficha' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'numero_solicitud' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'id_aprendiz_lider' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'versionespecialidade_id', 'instructore_id'), 'unique' => 1), 'fk_grupos_instructores1' => array('column' => 'instructore_id', 'unique' => 0), 'fk_grupos_version_especialidades1' => array('column' => 'versionespecialidade_id', 'unique' => 0)),
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
			'nombre' => 'Lorem ipsum dolor sit amet',
			'consecutivo' => 'Lorem ipsum dolor sit amet',
			'fecha_inicial' => '2012-01-29',
			'fecha_final' => '2012-01-29',
			'versionespecialidade_id' => 1,
			'numero_ficha' => 'Lorem ipsum dolor sit amet',
			'numero_solicitud' => 'Lorem ipsum dolor sit amet',
			'instructore_id' => 1,
			'id_aprendiz_lider' => 1,
			'created' => '2012-01-29 18:39:12',
			'updated' => '2012-01-29 18:39:12'
		),
	);
}
