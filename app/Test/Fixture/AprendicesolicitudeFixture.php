<?php
/* Aprendicesolicitude Fixture generated on: 2012-01-29 18:12:44 : 1327878764 */

/**
 * AprendicesolicitudeFixture
 *
 */
class AprendicesolicitudeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'acta_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'solicitude_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aprendice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'acta_id', 'solicitude_id', 'aprendice_id'), 'unique' => 1), 'fk_aprendices_solicitudes_actas1' => array('column' => 'acta_id', 'unique' => 0), 'fk_aprendices_solicitudes_solicitudes1' => array('column' => 'solicitude_id', 'unique' => 0), 'fk_aprendices_solicitudes_aprendices1' => array('column' => 'aprendice_id', 'unique' => 0)),
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
			'acta_id' => 1,
			'solicitude_id' => 1,
			'aprendice_id' => 1,
			'created' => '2012-01-29 18:12:44',
			'updated' => '2012-01-29 18:12:44'
		),
	);
}
