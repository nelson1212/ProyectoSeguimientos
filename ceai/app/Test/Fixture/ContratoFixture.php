<?php
/* Contrato Fixture generated on: 2012-01-29 18:29:09 : 1327879749 */

/**
 * ContratoFixture
 *
 */
class ContratoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'instructore_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'tipocontrato_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'numero_contrato' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'cantidad_horas' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'fecha_inicial_contra' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'fecha_final_contra' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'valor_contrato_total' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'valor_contrato_mensual' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'instructore_id', 'tipocontrato_id'), 'unique' => 1), 'fk_contratos_instructores1' => array('column' => 'instructore_id', 'unique' => 0), 'fk_contratos_tipos_contratos1' => array('column' => 'tipocontrato_id', 'unique' => 0)),
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
			'instructore_id' => 1,
			'tipocontrato_id' => 1,
			'numero_contrato' => 'Lorem ipsum dolor sit amet',
			'cantidad_horas' => 'Lorem ipsum dolor sit amet',
			'fecha_inicial_contra' => '2012-01-29',
			'fecha_final_contra' => '2012-01-29',
			'valor_contrato_total' => 'Lorem ipsum dolor sit amet',
			'valor_contrato_mensual' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-01-29 18:29:09',
			'updated' => '2012-01-29 18:29:09'
		),
	);
}
