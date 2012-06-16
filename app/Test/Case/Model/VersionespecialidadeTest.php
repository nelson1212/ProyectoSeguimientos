<?php
/* Versionespecialidade Test cases generated on: 2012-01-29 18:55:50 : 1327881350*/
App::uses('Versionespecialidade', 'Model');

/**
 * Versionespecialidade Test Case
 *
 */
class VersionespecialidadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.versionespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.instructore', 'app.vinculo', 'app.centro', 'app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.aprendicegrupo', 'app.horarioadministrativo', 'app.ambiente', 'app.horarioespeciale', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.resultadoaprendizaje', 'app.competencias', 'app.calificacione', 'app.inasistencia', 'app.planemejoramiento', 'app.resultadoproyecto', 'app.proyecto', 'app.actainstructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.contrato', 'app.tipocontrato');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Versionespecialidade = ClassRegistry::init('Versionespecialidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Versionespecialidade);

		parent::tearDown();
	}

}
