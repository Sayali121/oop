<?php
//OOPs Concept in PHP(Method Chaining)
class ABC
{
    public $value = "Hi i am value";
}
class xyz
{
    public $abc;
    public function __construct(ABC $abc)
    {
        echo $abc->value;
    }
}
$abc =  new ABC();
$obj = new xyz($abc);


?>
