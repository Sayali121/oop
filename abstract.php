<?php
//OOPs Concept in PHP Abstract class
//Abstract class :- abstract class is a class that contains empty methods as well as non empty methods
//When we make abstract  class or abstract method....when extend in this abstract class or abstract method in another class then arises error beacuse we use this method in second class is must.
//class : regular employee || parttime employee

// abstract class Base
// {
// 	public function Demo() //method with definition
// 	{
// 		echo "Abstract class Demo";

// 	}
// 	abstract public function Demo1(); //method without definition
	
   
// }

// class child_class extends Base
// {
// 	function Demo1()
// 	{
// 		echo "Hello..";
     
// 	}

// }

// $obj = new child_class();
// $obj->Demo1();
// $obj->Demo();


abstract class BaseDemo
{
	protected $first_name;
	protected $last_name;

	abstract function GetMontlysal();

	public function GetFullname()
	{
		return $this->first_name."".$this->last_name;
	}

	function __construct($f,$l)
	{
		$this->first_name = $f;
		$this->last_name = $l;

	}
}

 class RegularEmployee extends BaseDemo
{
	
	protected $annualsalary;

	

	public function GetMontlysal()
	{
		return $this->annualsalary/12;

	}

	
}
class ParttimeEmployee extends BaseDemo
{
	
	protected $hourrate;
	protected $tottalhours;
	
	public function GetMontlysal()
	{
		return $this->hourrate * $this->tottalhours;

	}

	

}

$obj = new RegularEmployee("Regular","Employee");
echo $obj->GetFullname();
echo $obj->GetMontlysal();

 $obj2 = new ParttimeEmployee("Part","Time");
 echo $obj2->GetFullname();
 echo $obj2->GetMontlysal();



?>