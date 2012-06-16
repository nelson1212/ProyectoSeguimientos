<?php
/* Trimestre Test cases generated on: 2012-01-29 18:55:07 : 1327881307*/
App::uses('Trimestre', 'Model');

/**
 * Trimestre Test Case
 *
 */
class TrimestreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.trimestre', 'app.acta', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.vinculo', 'app.actainstructore', 'app.calificacione', 'app.resultadoaprendizaje', 'app.competencias', 'app.horario', 'app.calendarioacademico', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.resultadoproyecto', 'app.proyecto', 'app.inasistencia', 'app.planemejoramiento', 'app.contrato', 'app.tipocontrato', 'app.instructoreespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.actagrupo', 'app.aprendicegrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.etapa', 'app.conceptualgrupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Trimestre = ClassRegistry::init('Trimestre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Trimestre);

		parent::tearDown();
	}

}
