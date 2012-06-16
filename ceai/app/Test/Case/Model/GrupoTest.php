<?php
/* Grupo Test cases generated on: 2012-01-29 18:39:12 : 1327880352*/
App::uses('Grupo', 'Model');

/**
 * Grupo Test Case
 *
 */
class GrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.grupo', 'app.versionespecialidade', 'app.instructore', 'app.actagrupo', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.horarioespeciale', 'app.horario', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicegrupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.etapa', 'app.actainstructore', 'app.conceptualgrupo', 'app.proyecto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Grupo = ClassRegistry::init('Grupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupo);

		parent::tearDown();
	}

}
