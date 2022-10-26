<?php

/*  

    Access Modifier (Erişim Belirleyiciler)

    Public      : Genel heryerden erişime açık olduğunu ifade eder.
    Private     : Özel, yanlızca sınıf içerisinden erişilebilir.
    Protected   : Korumalı, sınıf içerisinden ve türetilen sınıflardan erişilebilir. 

    static      : Sabit Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.

    $this       :  Bu sınıfta, şeklinde sınıfı işaret etmek için kullanılır.
    self::      :  Kendi sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.
    parent::    :  Ebeveyn sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.



*/


class Kutuphane
{
    public $libraryName = "Adu Kütüphane";
    public const YEAR = 1980;

    public function kitapSay()
    {
        return "Kitaplar Sayılıyor.";
    }
}

class CalismaOdasi extends Kutuphane
{
    public function getInfo()
    {
        $text       = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";

        $isim       = $this->libraryName;

        $kurulus    = self::YEAR;

        $sayim = parent::kitapSay(); /* Dahil olunan sınıfın içindeki metodu çağırır. */
     

        return "$text - $isim($kurulus) - $sayim";
    }
}
$nesne = new CalismaOdasi;
echo $nesne->getInfo();
