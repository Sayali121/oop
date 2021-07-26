<?php
//OOPs Concept in PHP Constructor
//Constructor :- Is used to allocate memory at runtime
//In Constructor not need to use arrow operator for calling Variable / Function
//Default Constructor / Parametralized Constructor

class AC
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
}

$Ac_One = new AC("ABC","3");


echo $Ac_One->model;
echo $Ac_One->speed;


?>