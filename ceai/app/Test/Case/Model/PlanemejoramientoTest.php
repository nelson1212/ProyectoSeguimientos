<?php
/* Planemejoramiento Test cases generated on: 2012-01-29 18:48:29 : 1327880909*/
App::uses('Planemejoramiento', 'Model');

/**
 * Planemejoramiento Test Case
 *
 */
class PlanemejoramientoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.planemejoramiento', 'app.calificacione', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.vinculo', 'app.actainstructore', 'app.contrato', 'app.tipocontrato', 'app.horarioespeciale', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.resultadoaprendizaje', 'app.instructoreespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.resultadoproyecto', 'app.actagrupo', 'app.aprendicegrupo', 'app.proyecto', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.etapa', 'app.conceptualgrupo', 'app.inasistencia');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Planemejoramiento = ClassRegistry::init('Planemejoramiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Planemejoramiento);

		parent::tearDown();
	}

}
