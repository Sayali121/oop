<?php
//OOPs concept in PHP(Type Hinting Using Class)
//interface is a collection of abstract method
interface show
{
    function hi();
    
}
class ABC implements show
{
    function Demo()
    {
        echo"Demo Function From ABC Class";
    }
    public function hi()
    {
       echo"Hi method belongs to abc class";
    }
}
class XYZ implements show
{
   function Demo1()
    {
        echo"Demo1 Function From XYZ Class";
    } 
     public function hi()
    {
        echo"Hi method belongs to xyz class";
    }
}

function Test(show $obj1)
{
    $obj1->hi();
}
$obj1 = new XYZ();
Test($obj1);  //Calling
?>