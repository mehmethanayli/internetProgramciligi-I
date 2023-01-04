<?php

abstract class Deneme
{

    abstract public function tanimla($deger);
}


class MYO extends Deneme
{
    public function tanimla($a)
    {
        echo "Merhaba - MYO:  $a";
    }
}

class Muhendislik extends Deneme
{
    /* Metot Deneme Sınıfı içerisindeki imzaya göre yazıldı. */
    public function tanimla($a)
    {
        echo "Merhaba - Mühendislik";
    }
}

$myoMesaj="Benim Güzel Meslek Yüksek Okulum :)";
$myoNesne = new MYO;
$myoNesne->tanimla($myoMesaj);
