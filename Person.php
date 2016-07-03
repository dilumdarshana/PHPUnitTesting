<?php
namespace apache;

class person {

	public $name;
	public $age;

	public function __construct ($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function setName ($name)
	{
		$this->name = $name;
	}

	public function getName ()
	{
		return $this->name;
	}
}
