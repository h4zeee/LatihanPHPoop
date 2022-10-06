<?php

class MembuatFunction{
    public $title = "ini latihan membuat function";
public function sayHello(){
    echo 'ini dari class' . __CLASS__;
}

public function perkalian($number = 4 ){
    echo 'angka yang dimasukkan adalah' . $number;
}

public function getTitle(){
    return $this->title;
}

}
$obj = new MembuatFunction();
echo $obj-> sayHello();
echo '<br>';
echo $obj->perkalian();
echo '<br>';
echo $obj->getTitle();
 