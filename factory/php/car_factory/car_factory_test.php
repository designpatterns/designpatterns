<?php

require_once 'car_factory.php';

/**
 * CarsFactory test case.
 */
class CarsFactoryTest extends PHPUnit_Framework_TestCase {

	/**
	 *
	 * @var CarsFactory
	 */
	private $CarsFactory;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();

		// TODO Auto-generated CarsFactoryTest::setUp()
	}

	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated CarsFactoryTest::tearDown()
		$this->CarsFactory = null;

		parent::tearDown ();
	}

	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}

	/**
	 * Tests CarsFactory::create()
	 */
	public function testCreate() {
		$this->assertEquals('new BMW car created', CarsFactory::create('bmw'));
		$this->assertEquals('new Mercedes car created', CarsFactory::create('mercedes'));
		$this->assertEquals('new Ferari car created', CarsFactory::create('ferari'));

		$this->setExpectedException('CarException');
		CarsFactory::create('susita');
	}
}
