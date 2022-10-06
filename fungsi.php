<?php

class fungsi
{
    public function __construct(public $name ,public $numb)
    {
        
    }
    public function title():void
    {
        echo "belajar fungsi";
    }

    public function getparameter($testparameter){
        echo $testparameter;
    }
    public function getname(){
        return $this->name;
        
    }
    public function perkalian($numb_a = "2", $numb_b = "12"){
        return $numb_a  * $numb_b;
    }

}

$obj = new fungsi(name: "ily" , numb: "mocha");
echo $obj->name . "<br>";
echo $obj->numb . "<br>";
echo $obj->getparameter(testparameter: "just a friend to you");
echo $obj->perkalian($numb_a = "2", $numb_b = "12");