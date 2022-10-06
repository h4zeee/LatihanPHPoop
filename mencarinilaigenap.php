<?php
class mencarinilaigenap
{
    public function carinilaigenap($inputNilai){
    if ($inputNilai %= 2) {
        echo "{$inputNilai} adalah ganjil";
    }
    else{
        echo "{$inputNilai} adalah genap";
    }

}

}
$obj = new mencarinilaigenap();
echo $obj -> carinilaigenap(inputNilai:9);
