<?php
/* Aprendicegrupo Fixture generated on: 2012-01-29 18:11:27 : 1327878687 */

/**
 * AprendicegrupoFixture
 *
 */
class AprendicegrupoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'grupo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aprendice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'grupo_id', 'aprendice_id'), 'unique' => 1), 'fk_grupos_has_aprendices_aprendices1' => array('column' => 'aprendice_id', 'unique' => 0), 'fk_grupos_has_aprendices_grupos1' => array('column' => 'grupo_id', 'unique' => 0)),
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
			'grupo_id' => 1,
			'aprendice_id' => 1,
			'created' => '2012-01-29 18:11:27',
			'updated' => '2012-01-29 18:11:27'
		),
	);
}
