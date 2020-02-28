<?php
class Person{
	//Attributes
	private $name;
	public $email;

	//Constructor
	function __construct($name,$email){
		$this->name = $name;
		$this->email = $email;

	}

	//methods
	function setName($name){
		$this->name = $name;
	}

	function getName(){
		return $this->name;
	}
}

//instanciate
//$psn1 = new Person('Janeth','janeth@gmail.com');

//echo $psn->getName();



class Student extends Person{
	public $registration;

	function __construct($name,$email,$registration){
		
		parent::__construct($name,$email,$registration)
		$this->registration = $registration;

	}

	function setName($name){
		$this->registration = $registration;
	}

	function getName(){
		return $this->regisration;
	}
}

$student1 = new Mike('Mike','mike@gmail.com'123);

echo $student1->getregistration();










?>