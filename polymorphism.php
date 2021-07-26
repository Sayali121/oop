<?php
//OOPs Concepts in PHP Polymorphism
//Polymorphism : One name many forms
//class Rectangle : Area:: L*B, Circle:: 3.14*r*r, Shape
//Interface Shape
interface Shape
{
    public function calcarea();
   
}
class Rectangle implements Shape
{
    public $Length;
    public $breadth;
    
    function __construct($l,$b)
    {
        $this->Length = $l;
        $this->breadth = $b;
    }
    
    public function calcarea()
    {
       return $this->Length * $this->breadth; 
    }
}
class Circle implements Shape
{
    public $radius;
     function __construct($r)
    {
        $this->radius = $r;
        
    }
     public function calcarea()
    {
       return 3.14 * $this->radius * $this->radius; 
    }
}
$obj1 = new Rectangle(23,45);
echo $obj1->calcarea();

echo "<br>";

$obj2 = new Circle(23);
echo $obj2->calcarea();
?>