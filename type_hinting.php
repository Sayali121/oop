<?php
//OOPs Concept in PHP(Type Hinting)
function test(array $arr)
{
    echo"<table border=2>";
   foreach($arr as $k=>$i)
   {
     echo"<tr><td>$k</td><td>$i</td></tr>"  ;
   }
    echo"</table>";
}
$arr = array('ABC'=>'abc','XYZ'=>'xyz');
test($arr); //calling
?>