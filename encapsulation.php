<?php
//OOPs Concept in PHP Encapsulation
//Encapsulation :- Wrapping of a data / function in a single unit


class AC //Base Class/Parent Class/Super Class
{
	//Structure
	protected $model;
	public $speed;
	//Behaviour

	public function speedUp()
	{
       echo $this->speed+1;
	}

	public function speedDown()
	{
      echo $this->speed--;
	}

	public function __construct($model,$speed)
	{
		  $this->model = $model;
		  $this->speed = $speed;
	}

	protected function getModel() //Accessor function
	{
		return $this->model;
	}

	

	
}

class smart_AC extends AC //Derived Class/Sub Class/Child Class
{

public function getModel() //Accessor function
	{
		return $this->model;
	}
   
		
}

$sayali = new smart_AC("Voltas",16);
echo $sayali->getModel();
echo $sayali->speed;



//private
//protected
//public

?>

