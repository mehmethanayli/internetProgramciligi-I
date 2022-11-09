<?php

/* 
abstract: Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır.

interface:Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıfı haline dönüştürmek için kullanılır.

implements: Daha önceden oluşturulmuş olan herhangi bir arayüz sınıfını, ilgili sınıfa tanımlamak/uygulamak için kullanılır.

abstract:
1. Soyut metotlar içerebilir.
2. Normal metotlar içerebilir.
3. Özellik içerebilir.
4. Sabitleri içerebilir.
5. public, private ve protected tanımlanabilir.
6. Herhangi bir sınıf sadece bir tane abstract class içerebilir.

interface: 
1. Soyut metodlar içerebilir.
2. public erişim belirleyiciye sahip olmak kaydıyla normal metodlar içerebilir.
3. sabit değişken içerebilir.
4. Herhangi bir sınıfta birden fazla interface kullanılabilir.

*/

abstract class Deneme
{

    abstract public function tanimla($deger); // hata kodu döndürür. Çünkü soyut sınıf içerisinde bulunan metotlar muhakkak soyut sınıftan türeyen alt sınıflarda da bulunmalıdır. Birden fazla bu sınıfı miras alan somut sınıf varsa miras alan tüm sınıflar bu metodu yazmak zorundadır.

}

class Myo extends Deneme
{
    public function tanimla($deger)
    {
        /* Bu fonksiyon tüm sınıflarda sınıfın kendi yapısına göre yazılmak zorundadır. */
    }
}

class Egitim extends Deneme
{
}

class Muhendislik extends Deneme
{
}
