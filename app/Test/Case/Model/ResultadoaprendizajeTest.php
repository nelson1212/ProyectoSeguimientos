<?php
/* Resultadoaprendizaje Test cases generated on: 2012-01-29 18:52:48 : 1327881168*/
App::uses('Resultadoaprendizaje', 'Model');

/**
 * Resultadoaprendizaje Test Case
 *
 */
class ResultadoaprendizajeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.resultadoaprendizaje', 'app.competencias', 'app.calificacione', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.vinculo', 'app.actainstructore', 'app.contrato', 'app.tipocontrato', 'app.horarioespeciale', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.instructoreespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.resultadoproyecto', 'app.actagrupo', 'app.aprendicegrupo', 'app.proyecto', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.etapa', 'app.conceptualgrupo', 'app.inasistencia', 'app.planemejoramiento');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Resultadoaprendizaje = ClassRegistry::init('Resultadoaprendizaje');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Resultadoaprendizaje);

		parent::tearDown();
	}

}
