<?php

require_once 'car_paint.php';

/**
 * BMWFactory test case.
 */
class BMWFactoryTest extends PHPUnit_Framework_TestCase {

	/**
	 *
	 * @var BMWFactory
	 */
	private $BMWFactory;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();

		// TODO Auto-generated BMWFactoryTest::setUp()

		$this->BMWFactory = new BMWFactory(/* parameters */);
	}

	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated BMWFactoryTest::tearDown()
		$this->BMWFactory = null;

		parent::tearDown ();
	}

	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}

	/**
	 * Tests BMWFactory::create()
	 */
	public function testCreate() {
		$this->assertEquals('painted to black', BMWFactory::create('black'));
		$this->assertEquals('painted to red', BMWFactory::create('red'));
	}
}
