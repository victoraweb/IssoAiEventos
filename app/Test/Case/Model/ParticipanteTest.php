<?php
App::uses('Participante', 'Model');

/**
 * Participante Test Case
 *
 */
class ParticipanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participante',
		'app.usuario',
		'app.administrador',
		'app.organizador',
		'app.plano',
		'app.evento',
		'app.localizacao',
		'app.eventos_participante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Participante = ClassRegistry::init('Participante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Participante);

		parent::tearDown();
	}

}
