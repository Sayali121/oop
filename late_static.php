<?php 
//OOPs Concept in PHP Late Static Binding

   class DBDemo
   {
       protected static $table="BaseDemo";
       
       public function select()
       {
           echo "SELECT * FROM".static::$table;
       }
       public function Insert()
       {
           echo "Insert into".static::$table;
       }
   }

class Student extends DBDemo
{
     protected static $table="student";
    
}

class feedback extends DBDemo
{
     protected static $table="feedback";
}


$obj1 = new Student();
$obj1->select();
$obj1->Insert();
?>