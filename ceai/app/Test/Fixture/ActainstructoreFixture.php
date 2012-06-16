<?php
/* Actainstructore Fixture generated on: 2012-01-29 18:05:15 : 1327878315 */

/**
 * ActainstructoreFixture
 *
 */
class ActainstructoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'acta_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'acta_id', 'instructore_id'), 'unique' => 1), 'fk_actas_has_instructores_instructores1' => array('column' => 'instructore_id', 'unique' => 0), 'fk_actas_has_instructores_actas1' => array('column' => 'acta_id', 'unique' => 0)),
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
			'instructore_id' => 1,
			'created' => '2012-01-29 18:05:15',
			'updated' => '2012-01-29 18:05:15'
		),
	);
}
