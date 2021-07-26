<?php
//OOPs Concept in PHP Classes & Objects
//Object :- Structure/Variable/Feature
//Behaviour/Method
class AC
{
	//Structure
	public $model = "xyz";
	public $speed = 16;
	//Behaviour

	function speedUp()
	{
       echo $this->speed+1;
	}

	function speedDown()
	{
      echo $this->speed--;
	}
}

$Ac_One = new AC();
echo $Ac_One->model = "Voltas";
$Ac_One->speedUp();
$Ac_One->speedDown();

$Ac_Two = new AC();
echo $Ac_Two->model;

?>