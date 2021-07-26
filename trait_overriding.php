<?php
//OOPs Concept in PHP Traits with overriding
class Abc
{
    function Test()
    {
        echo"Hello,I am function of Abc class";
    }
}
trait t1
{
     function Test()
    {
        echo"Hello,I am function of trait t1";
    }
    
}
class Demo1 extends Abc
{
    use t1;
}
$obj = new Demo1();
$obj->Test();


?>