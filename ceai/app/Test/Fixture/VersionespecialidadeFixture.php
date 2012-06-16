<?php
/* Versionespecialidade Fixture generated on: 2012-01-29 18:55:50 : 1327881350 */

/**
 * VersionespecialidadeFixture
 *
 */
class VersionespecialidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'version' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'especialidade_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'horas_lectiva' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'haras_productiva' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'especialidade_id'), 'unique' => 1), 'fk_version_especialidades_especialidades1' => array('column' => 'especialidade_id', 'unique' => 0)),
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
			'version' => 'Lorem ipsum dolor sit amet',
			'especialidade_id' => 1,
			'horas_lectiva' => 1,
			'haras_productiva' => 1,
			'created' => '2012-01-29 18:55:50',
			'updated' => '2012-01-29 18:55:50'
		),
	);
}
