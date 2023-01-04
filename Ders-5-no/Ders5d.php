<?php
interface Ornek
{
    public function tanim($deger);
}

/*Metot yazıldığı için hata oluşturmaz */
class Contact implements Ornek
{
    public function tanim($deger)
    {
        /* Fonksiyonun İçeriği */
    }
}

/* Hata döndürür: Çünkü soyut arayüz sınıfı içerisinde bulunan metotlar implemente eden sınıflarda da bulunmak zorundadır. */
class AboutUs implements Ornek
{
}
