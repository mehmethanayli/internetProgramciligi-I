<?php


interface Ornek
{
    public function Tanim($deger);
}

class Contact implements Ornek
{
    public function Tanim($deger)
    {
        /* Fonksiyon içeriği */
    }
}

/* Hata döndürür: Çünkü soyut arayüz sınıfı içerisinde bulunan metotlar implemente eden sınıflarda da bulunmak zorundadır. */
class AboutUs implements Ornek
{
}
