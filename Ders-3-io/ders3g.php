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
    protected $libraryName = "Adu Kütüphane";
    protected const YEAR = 1980;
}

class CalismaOdasi extends Kutuphane
{
    /* CalısmaOdasi Sınıfı Kutuphane sinifini kapsar. */

    public function getInfo()
    {
        $text       = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";

        $isim       = $this->libraryName;/* Extend edilen sınıfın içerisindeki protected değişkenlere $this ile erişilebilir. */

        $kurulus    = self::YEAR;/* Extend edilen sınıfın içerisindeki protected sabitlere self:: ile erişilebilir. */

        return "$text - $isim($kurulus)";
    }
}
$nesne = new CalismaOdasi;
echo $nesne->getInfo();
