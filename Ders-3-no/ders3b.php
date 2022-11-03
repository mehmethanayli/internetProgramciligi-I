<?php

/*  

    Access Modifier (Erişim Belirleyiciler)

    Public      : Genel heryerden erişime açık olduğunu ifade eder.
    Private     : Özel, yanlızca sınıf içerisinden erişilebilir.
    Protected   : Korumalı, sınıf içerisinden ve türetilen sınıflardan erişilebilir. 

    static      : Sabit Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.

    $this       :  Bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.
    self::      :  Kendi sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.
    parent::    :  Ebeveyn sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.

*/

/* Public */
class Kutuphane
{
    public $libraryName = " Adü Kütüphane";
    public const YEAR = 1980;

    public function getInfo()
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermektedir";
        return $text;
    }
}

$nesne = new Kutuphane;

echo "Kütüphanenin Adı: $nesne->libraryName";
echo "<br>";
echo "Kütüphanenin Kuruluş Yılı: " . $nesne::YEAR;
echo "<br>";
echo $nesne->getInfo();
