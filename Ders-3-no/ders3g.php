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

/* ************************ */
class Kutuphane
{
    protected $libraryName = " Adü Kütüphane";
    protected const YEAR = 1980;
}
/* ************************ */



/* ************************ */
class YeniKutuphane extends Kutuphane
{

    public function getInfo()
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermektedir";
        $kutuphaneAdi = $this->libraryName;/* Extend edilen sınıfın içerisindeki public değişkenlere $this ile erişilebilir. */
        $kurulus = self::YEAR;/* Extend edilen sınıfın içerisindeki sabitlere self:: ile erişilebilir. */

        return " $text - $kutuphaneAdi - $kurulus";
    }
}
/* ************************ */

$yeniNesne = new YeniKutuphane;
echo $yeniNesne->getInfo();
