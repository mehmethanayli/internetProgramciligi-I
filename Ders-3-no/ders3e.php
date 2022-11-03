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


class Kutuphane
{
    private $libraryName = " Adü Kütüphane";
    private const YEAR = 1980;

    public function getInfo()
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermektedir";

        $isim = $this->libraryName;
        $kurulus = self::YEAR;
        return "$text - $isim - ($kurulus) ";
    }
}
$nesne = new Kutuphane;

echo $nesne->getInfo();
