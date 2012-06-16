<?php
/* Instructore Test cases generated on: 2012-01-29 18:47:51 : 1327880871*/
App::uses('Instructore', 'Model');

/**
 * Instructore Test Case
 *
 */
class InstructoreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.instructore', 'app.vinculo', 'app.centro', 'app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.versionespecialidade', 'app.aprendicegrupo', 'app.horarioadministrativo', 'app.ambiente', 'app.horarioespeciale', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.resultadoaprendizaje', 'app.proyecto', 'app.actainstructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.contrato', 'app.tipocontrato', 'app.instructoreespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.resultadoproyecto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Instructore = ClassRegistry::init('Instructore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Instructore);

		parent::tearDown();
	}

}
