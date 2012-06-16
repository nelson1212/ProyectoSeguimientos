<?php
/* Competenciaversionespecialidade Fixture generated on: 2012-01-29 18:22:22 : 1327879342 */

/**
 * CompetenciaversionespecialidadeFixture
 *
 */
class CompetenciaversionespecialidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'versionespecialidade_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'competencia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'versionespecialidade_id', 'competencia_id'), 'unique' => 1), 'fk_version_especialidades_has_competencias_competencias1' => array('column' => 'competencia_id', 'unique' => 0), 'fk_version_especialidades_has_competencias_version_especialid1' => array('column' => 'versionespecialidade_id', 'unique' => 0)),
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
			'versionespecialidade_id' => 1,
			'competencia_id' => 1,
			'created' => '2012-01-29 18:22:22',
			'updated' => '2012-01-29 18:22:22'
		),
	);
}
