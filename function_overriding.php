<?php
//OOPs Concept in PHP function overriding
class Test
{
   public function show()
   {
       echo "Show is a function of Test Class.";
   }
}
class Demo extends Test
{
    public function show()
   {
        parent::show();
       echo "Show is a function of Demo Class.";
   }
}
$obj = new Demo();
$obj->show();

?>