<?php
/* Acta Fixture generated on: 2012-01-29 18:07:06 : 1327878426 */

/**
 * ActaFixture
 *
 */
class ActaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => 'DateTime para saber la fecha y la hora en que se hizo el seguimiento
'),
		'etapa' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'tipo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Tipo: ExtraOrdinaria u Ordinaria', 'charset' => 'latin1'),
		'trimestre_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'aprendice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => 'aprendice_id: es el representante de grupo'),
		'etapa_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'trimestre_id', 'aprendice_id', 'etapa_id'), 'unique' => 1), 'fk_actas_trimestres1' => array('column' => 'trimestre_id', 'unique' => 0), 'fk_actas_etapas1' => array('column' => 'etapa_id', 'unique' => 0), 'fk_actas_aprendices1' => array('column' => 'aprendice_id', 'unique' => 0)),
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
			'fecha' => '2012-01-29 18:07:06',
			'etapa' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'trimestre_id' => 1,
			'aprendice_id' => 1,
			'etapa_id' => 1,
			'created' => '2012-01-29 18:07:06',
			'updated' => '2012-01-29 18:07:06'
		),
	);
}
