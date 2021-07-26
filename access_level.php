<?php
//OOPs Concept in PHP(Access levelin traits)
trait t1
{
    private function Show()
    {
        echo "I am function trait t1";
    }
}
class Demo
{
    use t1{
        t1::Show as public;
    }
}
$obj1 = new Demo();
$obj1->show();


?>