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
}

class CalismaOdasi extends Kutuphane
{
    /* Kutuphane Sınıfı CalısmaOdasi sinifini kapsar.
    Yani CalismaOdasi Kutuphane sinifinin bir alt üyesidir. */

    public function getInfo()
    {
        $text       = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";

        $isim       = $this->libraryName;/* Extend edilen sınıfın içerisindeki public değişkenlere $this ile erişilebilir. */

        $kurulus    = self::YEAR;/* Extend edilen sınıfın içerisindeki sabitlere self:: ile erişilebilir. */

        return "$text - $isim($kurulus)";
    }
}
$nesne = new CalismaOdasi;
echo $nesne->getInfo();
