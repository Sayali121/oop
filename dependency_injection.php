<?php
//OOPs Concept in PHP Dependency Injection

class logger
{
    public function log($message)
    {
        echo"Logging Message : $message";
    }
}

//DRY :- Don't Repeat yourself

class userInfo
{
    private $logger;
    public function Createuser()
    {
        
        $this->logger->log("User Created");
    }
    public function Updateuser()
    {
       
        $this->logger->log("User Updated");
    }
    public function __construct(logger $logger)
    {
        $this->logger = $logger;
        
    }
}

$logger1 = new logger();

$abc = new userInfo($logger1);
$abc->Createuser();
$abc->Updateuser();


?>
