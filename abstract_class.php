<?php
 
abstract class a
 
{
 
abstract function b();
 
public function c()
 
{
 
echo "Can be used as it is";
 
}
 
}

//end abstract class
 
class m extends a
 
{
 function b(){
	 echo "<br> sarvaki murvaki<br>";
 }
public function b1()
 
{
 
echo "Defined function b<br/>";
 
}
 
}
 
$tClass = new m();
 
$tClass->b1();

$tClass->b();
 
$tClass->c();
 
?>