<?php

interface Olustur
{
    public function Olustur($deger);
}
interface Guncelle
{
    public function Guncelle($deger);
}
interface Getir
{
    public function Getir($deger);
}
interface Sil
{
    public function Sil($deger);
}


class Test implements Olustur, Guncelle, Sil, Getir
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
