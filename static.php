<?php 
//OOPs Concept in PHP Static Keyword
//Without object we can call static variable or static method.
//when common propties and or variable this we can define as static because to save memory.
//When we using static keyword the we have to self of self reference.
class IRCTC
{
    public static $count=0;
	
 static function getCount()
{
    return self::$count;
}
function __construct()
{
    self::$count++;
}
}
class xyz extends IRCTC
{
    static function getCount()
    {
        parent::getCount();
        return self::$count;
    }
}
$obj1=new xyz();
$obj2=new xyz();


echo xyz::getCount();


?>