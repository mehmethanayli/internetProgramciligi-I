<?php

interface CRUD
{
    public function Olustur($deger);
    public function Guncelle($deger);
    public function Getir($deger);
    public function Sil($deger);
}

abstract class Sablon
{
    abstract public function sayfaYapisi($icerik);
}

/* Bir sınıf bir abstract clası extend edebilir, birden fazla interface'yi implemente edebilir. */
class Test extends Sablon implements CRUD
{
    public function sayfaYapisi($icerik)
    {
        
    }
    public function Olustur($deger)
    {
    }
    public function Guncelle($deger)
    {
    }
    public function Getir($deger)
    {
    }
    public function Sil($deger)
    {
    }
}
