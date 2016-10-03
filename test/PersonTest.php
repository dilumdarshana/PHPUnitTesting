<?php
namespace phpUnitTesting\PersonTest;

use phpUnitTesting\Person;
use PHPUnit\Framework\TestCase;

require_once('classes/Person.php');

class PersonTest extends TestCase
{
	public $person;

	protected function setup()
	{
		$this->person = new Person('Apache', '34');
	}

	public function testSetName()
	{
		$this->person->setName('Linux');

		$name = $this->person->getName();

		$this->assertEquals($name, 'Linux');
	}

	public function testGetName()
	{
		$name = $this->person->getName();

		$this->assertEquals($name, 'Apache');
	}

	// will call this as soon as complete all tests
	protected function tearDown()
	{
		//echo 'After successs';
	}
}
