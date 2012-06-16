<?php
/* Horarioadministrativo Test cases generated on: 2012-01-29 18:40:58 : 1327880458*/
App::uses('Horarioadministrativo', 'Model');

/**
 * Horarioadministrativo Test Case
 *
 */
class HorarioadministrativoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.actagrupo', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioespeciale', 'app.horario', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicegrupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.etapa', 'app.actainstructore', 'app.conceptualgrupo', 'app.proyecto', 'app.calendarioacademico', 'app.competencia', 'app.competenciaversionespecialidade');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Horarioadministrativo = ClassRegistry::init('Horarioadministrativo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Horarioadministrativo);

		parent::tearDown();
	}

}
