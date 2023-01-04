<?php

interface CRUD
{
    public function Olustur($deger);
    public function Guncelle($deger);
    public function Getir($deger);
    public function Sil($deger);
}

class Test implements CRUD
{
    public function Olustur($deger)
    {
    }
    public function Getir($deger)
    {
    }
    public function Guncelle($deger)
    {
    }
    public function Sil($deger)
    {
    }
}
