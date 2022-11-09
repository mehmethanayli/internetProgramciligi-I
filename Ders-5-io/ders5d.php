<?php


interface Ornek
{
    public function Tanim($deger);
    /* Hata döndürür: Çünkü soyut arayüz sınıfı içerisinde bulunan metotlar implemente eden sınıflarda da bulunmak zorundadır. */
}

class Contact implements Ornek
{
    public function Tanim($deger)
    {
        /* Fonksiyon içeriği */
    }
}

class AboutUs implements Ornek
{
}
