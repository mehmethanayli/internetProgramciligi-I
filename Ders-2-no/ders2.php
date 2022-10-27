<?php
/* 

    class: Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.

    new: Daha önceden tanımlanmş olan herhangi bir sınıfı çağırmak için kullanılır.

    Kurallar:
    
    1.Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır.
    2.Sınıf isimleri içerisinde alfanumerik(A-Z a-z 0-9) değerler ve _ kullanılabilir.
    3.Sınıf isimleri mutlaka bir harf veya _ ile başlamalıdır.
    4.Sınıf isimleri rakam ile başlayamaz.
    5.Sınıf isimleri içerisinde hiçbir zaman boşluk ve türkçe karakter bulunmaz, özel karakterler(~|*?) kullanılamaz.  
    6.Sınıf isimleri tanımlanırken, php tarafından kullanılmakta olan isimler/tanımlar kullanılamaz.
    7.Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (Namespace(isim uzayı) kullanılması durumunda birden fazla kes farklı name space içerisinde kullanılabilir.)
    8.Sınıf isimleri küçük/büyük harf duyarlı değildir.
    9. Sınıf kapasama/etki alanı kurallarına tabidir.

    Yapısı: 

    class isim{
        Kod Blokları...
    }


    __construct : Sınıfın yapıcı metodudur. Sınıf çağırıldığında otomatik çalışır.

    __destruct : Sınıfın yıkıcı metodudur. Sınıfın işlemi bittiğinde otomatik çalışır.

Ömer Faruk Yaşar +10
Enes Saz +10
Tolgahan Ayaz +10
Kaan Uçarcı  +10
Efe Aydın +10
Furkan Güler  +10
Devrim Zengin -+10
Volkan Sunguray +10
Emre Kılcıoğlu +10
Saliha Gülcan Kasımoğlu +10
Mürüvet Yoluk +10
*/

class Sinif
{

    /* 
Yapıcı metotlara parametre gönderilebilir.
Yapıcı metotlara gönderilecek parametrelere varsayılan değer atanabilir(localhost).
Değer gelmediğinde varsayılan değer aktif olur.
Değer gelirse de gelen değer aktif olur.
*/
    public function __construct($hostname = "localhost", $username, $pass, $dbName)
    {
        $connection = "$hostname, $username, $pass, $dbName";
        return $connection;
    }


    /* public her yerden erişilebilir. */
    public $isim = "Mehmet";
    public $soyisim = "Hanaylı";


    public function write()
    {
        $metin = "Write fonksiyonu çalıştı";
        return $metin;
    }


    public function __destruct()
    {
        echo "Yıkıcı metot çalıştı";
    }
}


$nesne = new Sinif("mehmethanayli.com", "mhanayli", "123", "mch_db");


echo gettype($nesne);
echo "<br>";

print_r($nesne);

echo $nesne->write(); /* Nesne içerisindeki değişkene erişim. */

