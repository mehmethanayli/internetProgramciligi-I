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
*/

use function PHPSTORM_META\type;

class sinif
{

    /* Yapıcı Metoda parametre gönderilebilir.
    Yapıcı metoda gelen parametrelere varsayılan değer atanabilir.
    Değerin gelmediği durumda varsayılan değer aktif olur.
    Değer gelirsede gelen değer aktif olur. 
    */
    function __construct($hostname = "localhost", $username, $pass, $databese_name)
    {
        $metin = "$hostname,$username,$pass,$databese_name";
        return $metin;
    }


    /* Public her yerden erişilebilir. */
    public $isim = "mehmet";
    public $soyisim = "Hanaylı";


    public function Yaz()
    {
        $metin = "merhaba yazan fonksiyon çalıştı";
        return $metin;
    }

    function __destruct()
    {
        echo "Yıkıcı Metot çalıştı.";
    }
}

$yeniNesne = new Sinif("mehmethanayli.com", "mehmet", "123", "mch_data");

echo gettype($yeniNesne);

echo "<br>";
print_r($yeniNesne);

echo "<br>";
echo $yeniNesne->Yaz(); /* nesne içerisindeki metoda erişim. */
echo "<br>";
