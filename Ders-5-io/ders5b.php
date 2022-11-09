<?php


abstract class Deneme
{

    abstract public function Tanimla($deger);
}

class Myo extends Deneme
{
    public function Tanimla($deger)
    {
        echo "Fonksiyon yazıldı.";
    }
}
