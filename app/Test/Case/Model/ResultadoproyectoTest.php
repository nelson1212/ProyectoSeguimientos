<?php
/* Resultadoproyecto Test cases generated on: 2012-01-29 18:53:42 : 1327881222*/
App::uses('Resultadoproyecto', 'Model');

/**
 * Resultadoproyecto Test Case
 *
 */
class ResultadoproyectoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.resultadoproyecto', 'app.proyecto', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.vinculo', 'app.centro', 'app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.actainstructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.competencias', 'app.horario', 'app.ambiente', 'app.horarioadministrativo', 'app.calendarioacademico', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicegrupo', 'app.contrato', 'app.tipocontrato', 'app.instructoreespecialidade', 'app.especialidade', 'app.tipoformacione');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Resultadoproyecto = ClassRegistry::init('Resultadoproyecto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Resultadoproyecto);

		parent::tearDown();
	}

}
