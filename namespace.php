<?php
//OOPs Concept in PHP(Namespace)
namespace abc
{
    class xyz //access within a namespace
    {
        public function __construct()
        {
           echo "xyz class from abc namespace";
        }
        public function show()
        {
            
        }
    }
    
}
namespace {
    class xyz //Global class , access anywhere
    {
         public function __construct()
        {
           echo "Hello,I am from XYZ class";
        }
    }
    use abc\xyz as Demo;
    $obj1 = new Demo();
}

?>