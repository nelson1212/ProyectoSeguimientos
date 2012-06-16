<?php
/* Sectore Test cases generated on: 2012-01-29 18:53:56 : 1327881236*/
App::uses('Sectore', 'Model');

/**
 * Sectore Test Case
 *
 */
class SectoreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sectore', 'app.empresa', 'app.aprendiceempresa', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.vinculo', 'app.actainstructore', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.competencias', 'app.horario', 'app.calendarioacademico', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.resultadoproyecto', 'app.proyecto', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.contrato', 'app.tipocontrato', 'app.instructoreespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.aprendicegrupo', 'app.acudienteaprendice', 'app.acudiente');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Sectore = ClassRegistry::init('Sectore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sectore);

		parent::tearDown();
	}

}
