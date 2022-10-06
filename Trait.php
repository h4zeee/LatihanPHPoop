<?php
trait Role {
    abstract public function getRole():String;
}
class Babeh {
    public $nama;
    public $umur;
    public $marga;
    public static $index;
    public $is_status;



    public function __construct($nama, $umur, $is_status = "Anak")
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->marga = 'Tan';
        self::$index = 1;
        $this->is_status = $is_status;
    }

public function getMarga(){
    return $this->marga;
}

public function getName()
{
    return $this->nama;
}

public function getStatus()
{
    return $this->is_status;
}

public function getUmur()
{
    return $this->umur;
}

public function display()
{
    echo 'No' . self::$index++ . '<br>';
    echo 'nama' . $this->getName() . '<br>';
    echo "marga"  .$this->getMarga(). '<br>';
    echo "Umur " . $this->getUmur() . "<br>";
}
}