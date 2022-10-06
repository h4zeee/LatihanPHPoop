<?php

trait ApaKabar
{
    public function apaKabar()
    {
        echo static::class . 'dari apa kabar?';
    }
}

trait SelamatPagi
{
    public function apaKabar()
    {
        echo static::class . ' dari selamat pagi';
    }
}

class Pesan
{
    use ApaKabar, SelamatPagi{
        ApaKabar::apaKabar insteadof SelamatPagi;
        SelamatPagi::apaKabar as traitselamatpagi;
    }
}


$pesan = new Pesan();
echo $pesan->traitselamatpagi();
