<?php
/* Aprendiceempresa Fixture generated on: 2012-01-29 18:11:00 : 1327878660 */

/**
 * AprendiceempresaFixture
 *
 */
class AprendiceempresaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aprendice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'aprendice_id', 'empresa_id'), 'unique' => 1), 'fk_aprendices_empresas_aprendices1' => array('column' => 'aprendice_id', 'unique' => 0), 'fk_aprendices_empresas_empresas1' => array('column' => 'empresa_id', 'unique' => 0)),
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
			'aprendice_id' => 1,
			'empresa_id' => 1,
			'created' => '2012-01-29 18:11:00',
			'updated' => '2012-01-29 18:11:00'
		),
	);
}
