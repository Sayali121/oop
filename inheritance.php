<?php
//OOPs Concept in PHP Inheritance
//Interitance :- It is use for reusablity.derived class access variable for funcion of base class

class AC //Base Class/Parent Class/Super Class
{
	//Structure
	public $model;
	public $speed;
	//Behaviour

	function speedUp()
	{
       echo $this->speed+1;
	}

	function speedDown()
	{
      echo $this->speed--;
	}

	function __construct($model,$speed)
	{
		  $this->model = $model;
		  $this->speed = $speed;
	}

	function Display()
	{
		 return $this->model;
	}

	function Display1()
	{
		return $this->Display();
	}
}

class smart_AC extends AC //Derived Class/sub class/child class
{
    public $timer=true;
    public $wifi="Avail";

    function smart_AC1()
    {
    	return $this->model;
    }

		
}

$AC1 = new AC("PQR","13");
echo $AC1->Display1();
echo $AC1->speed;
// echo $AC1->model="Pinky"; //Wrong


$AC2 = new smart_AC("XYZ","18");
echo $AC2->model;
echo $AC2->speed;
echo $AC2->wifi;

echo $AC2->smart_AC1();

?>