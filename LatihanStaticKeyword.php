<?php

abstract class LatihanStaticKeyword {
    
    public static string $title = __CLASS__;

    public static function getTitle()
    {
        return new static;
    
    }

    public static function getSelf()
    {
        return new self;
    }
}

class ChildClass extends LatihanStaticKeyword{

    public static string $title = 'ini Class' . __CLASS__;

    public static function getTitle(){
        return Coba::$title;
    }

    public static function getSelf()
    {
        return ChildClass::getTitle();
    }
}

class Coba {
    public static $title = 'Ini Class' .  __CLASS__;

}

echo ChildClass::getTitle();
echo '<br>';
echo ChildClass::GetSelf();