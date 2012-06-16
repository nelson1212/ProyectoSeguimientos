<?php
/* Acudienteaprendice Fixture generated on: 2012-01-29 18:07:51 : 1327878471 */

/**
 * AcudienteaprendiceFixture
 *
 */
class AcudienteaprendiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'int' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aprendice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'acudiente_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('int', 'aprendice_id', 'acudiente_id'), 'unique' => 1), 'fk_acudientes_aprendices_aprendices1' => array('column' => 'aprendice_id', 'unique' => 0), 'fk_acudientes_aprendices_acudientes1' => array('column' => 'acudiente_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'int' => 1,
			'aprendice_id' => 1,
			'acudiente_id' => 1,
			'created' => '2012-01-29 18:07:51',
			'updated' => '2012-01-29 18:07:51'
		),
	);
}
