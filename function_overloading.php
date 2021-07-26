<?php
//OOPs Concept in PHP function overloading
class Test
{
    public function __construct()
    {
        echo "Implement function overloading";
    }
    public function __call($name,$arguments)
    {
       if($name=="overload") 
       {
           $count = count($arguments);
           switch($count)
           {
               case "1":
                   echo "Argument One";
                   break;
               case "2":
                   echo "Argument Two";
                   break;
               case "3":
                   echo "Argument Three";
                   break;
                deafault :
                   echo "You have entered invalid";
                   break;
           }
       }
    }
}
$obj1 = new Test();
//$obj1->overload("ABC");
$obj1->overload("PQR",23);
//$obj1->overload("XYZ",24,"BE");