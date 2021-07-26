<?php
//OOPs Concept in PHP(Method Chaining)
class Abc
{
    public function fun1()
    {
        echo"fun1() from Abc class";
        return $this;
    }
    public function fun2()
    {
        echo"fun2() from Abc class";
         return $this;
    }
    public function fun3()
    {
         echo"fun3() from Abc class";
    }
}
$obj1 = new Abc();
$obj1->fun1()->fun2()->fun3();


?>