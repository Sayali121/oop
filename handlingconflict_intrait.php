<?php
//OOPs Concept in PHP(Conflict handling in traits)

trait t1
{
   public function Test()
   {
       echo "Test method from trait 1";
   }
}
trait t2
{
   public function Test()
   {
       echo "Test method from trait 2";
   }
}
class Demo
{
    use t1,t2{
        t2::Test insteadof t1;
        t1::Test as a;
    }
}
$obj1 = new Demo();
$obj1->a();
  
?>