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
7. Abstract metotlar sadece abstract class içinde yazılmalıdır.

interface: 
1. Soyut metodlar içerebilir.
2. public erişim belirleyiciye sahip olmak kaydıyla normal metodlar içerebilir.
3. sabit değişken içerebilir.
4. Herhangi bir sınıfta birden fazla interface kullanılabilir.

*/


abstract class Deneme
{

    abstract public function tanimla($deger);
}


/* Bu metot sınıfın kendi özelliklerine göre yazılmak zorundadır. */
class MYO extends Deneme
{
    public function tanimla($a)
    {
        echo "Merhaba";
    }
}

class Muhendislik extends Deneme
{
    public function tanimla($a)
    {
        echo "Merhaba - Mühendislik";
    }
}


class Egitim extends Deneme
{
    public function tanimla($a)
    {
        echo "Merhaba - Egitim";
    }
}

// hata kodu döndürür. Çünkü soyut sınıf içerisinde bulunan metotlar muhakkak soyut sınıftan türeyen alt sınıflarda da bulunmalıdır. Birden fazla bu sınıfı miras alan somut sınıf varsa miras alan tüm sınıflar bu metodu yazmak zorundadır.

class YabanciDiller extends Deneme
{
}
