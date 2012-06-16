<?php
/* Aplicativousuario Fixture generated on: 2012-01-29 18:10:14 : 1327878614 */

/**
 * AplicativousuarioFixture
 *
 */
class AplicativousuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aplicativo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'usuario_id', 'aplicativo_id'), 'unique' => 1), 'fk_usuarios_has_aplicativos_aplicativos1' => array('column' => 'aplicativo_id', 'unique' => 0), 'fk_usuarios_has_aplicativos_usuarios1' => array('column' => 'usuario_id', 'unique' => 0)),
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
			'usuario_id' => 1,
			'aplicativo_id' => 1,
			'created' => '2012-01-29 18:10:14',
			'updated' => '2012-01-29 18:10:14'
		),
	);
}
