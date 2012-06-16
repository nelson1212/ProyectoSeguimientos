<?php
/* Proyecto Test cases generated on: 2012-01-29 18:49:06 : 1327880946*/
App::uses('Proyecto', 'Model');

/**
 * Proyecto Test Case
 *
 */
class ProyectoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.proyecto', 'app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.vinculo', 'app.centro', 'app.ciudade', 'app.departamento', 'app.barrio', 'app.aprendice', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.actainstructore', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicegrupo', 'app.ambiente', 'app.horarioadministrativo', 'app.calendarioacademico', 'app.horario', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.contrato', 'app.tipocontrato', 'app.instructoreespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.resultadoproyecto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Proyecto = ClassRegistry::init('Proyecto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proyecto);

		parent::tearDown();
	}

}
