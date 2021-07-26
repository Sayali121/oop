<?php
//OOPs Concept in PHP Interface
//Interface is basically collection of empty methods 
//In interface we only declare a function not define in interface
//In interface we can't use variables

//Difference:-
//Abstract class :- Abstract class is class that contains empty methods as well as non empty methods.Abstract class have constrcutor.In abstract class we can create variables.In abstract class, we can't create object of abstract class.
//Interface :- Interface contains only abstract methods.In interface contains only public methods.We can't create variables in interface. 


Interface A 
{
	function Demo();

}
Interface B 
{
	function Demo1();

}
class Demo implements A,B
{
	public function Demo()
	{
		return "Hello World";

	}
	public function Demo1()
	{
		return "PHP Language";

	}

}
class Demo1 implements A
{
	public function Demo()
	{

	}

}

$obj = new Demo();
echo $obj->Demo();
echo $obj->Demo1();


?>