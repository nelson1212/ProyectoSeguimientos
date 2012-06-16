<?php
/* Inasistencia Test cases generated on: 2012-01-29 18:46:41 : 1327880801*/
App::uses('Inasistencia', 'Model');

/**
 * Inasistencia Test Case
 *
 */
class InasistenciaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.inasistencia', 'app.calificacione', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.actagrupo', 'app.aprendicegrupo', 'app.horarioespeciale', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.resultadoaprendizaje', 'app.proyecto', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.etapa', 'app.actainstructore', 'app.conceptualgrupo', 'app.planemejoramiento');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Inasistencia = ClassRegistry::init('Inasistencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inasistencia);

		parent::tearDown();
	}

}
