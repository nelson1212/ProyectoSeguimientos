<?php
/* Vinculo Test cases generated on: 2012-01-29 18:56:07 : 1327881367*/
App::uses('Vinculo', 'Model');

/**
 * Vinculo Test Case
 *
 */
class VinculoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.vinculo', 'app.instructore', 'app.centro', 'app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.grupo', 'app.versionespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.competenciaversionespecialidade', 'app.competencia', 'app.horarioadministrativo', 'app.ambiente', 'app.horarioespeciale', 'app.calendarioacademico', 'app.horario', 'app.resultadoaprendizaje', 'app.competencias', 'app.calificacione', 'app.inasistencia', 'app.planemejoramiento', 'app.resultadoproyecto', 'app.proyecto', 'app.aprendicegrupo', 'app.actainstructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.contrato', 'app.tipocontrato');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Vinculo = ClassRegistry::init('Vinculo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vinculo);

		parent::tearDown();
	}

}
