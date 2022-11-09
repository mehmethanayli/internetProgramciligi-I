<?php


interface CRUD
{
    private function Olustur($deger);/* Hata: Soyut arayüz sınıfı içerisinde private kullanılmaz. */
    protected function Guncelle($deger);/* Hata: Soyut arayüz sınıfı içerisinde protected kullanılmaz. */
    public function Getir($deger);
    public function Sil($deger);
}

class Test implements CRUD
{
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
