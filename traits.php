<?php
//OOPs Concept in PHP Traits
class abs
{
    public function Test()
    {
        echo"Hello, I am function of abs class";
    }
}
trait t1
{
    function Test1()
    {
        echo"I am function of traits t1";
    }
}
trait t2
{
    function Test2()
    {
        echo"I am function of traits t2";
    }
}
class one extends abs
{
    
}
class two extends abs
{
    
}
class three extends abs
{
    use t1,t2;
}
$obj1 = new three();
$obj1->Test1();
$obj1->Test2();
?>