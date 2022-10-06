<?php 
class newconstructor
{
public $name,$level;
public function __construct()
{
    $this->name = "new constructor";
    $this->level = "easy";
}
}
$obj = new  newconstructor;
echo"nama :" . $obj->name . "<br>";
echo"level :" . $obj->level  . "<br>";
