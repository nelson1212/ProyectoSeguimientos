<?php
/* Horarioespeciale Test cases generated on: 2012-01-29 18:41:38 : 1327880498*/
App::uses('Horarioespeciale', 'Model');

/**
 * Horarioespeciale Test Case
 *
 */
class HorarioespecialeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.horarioespeciale', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.actagrupo', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicegrupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.etapa', 'app.actainstructore', 'app.conceptualgrupo', 'app.proyecto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Horarioespeciale = ClassRegistry::init('Horarioespeciale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Horarioespeciale);

		parent::tearDown();
	}

}
