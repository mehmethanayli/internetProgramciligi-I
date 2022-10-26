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
    private $libraryName = "Adu Kütüphane";
    private const YEAR = 1980;

    public function getInfo()
    {
        $text       = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";

        $isim       = $this->libraryName; /* Sınıfın içinde ama scope dışında bulunan bir özelliğe erişmek için kullanılır. */

        $kurulus    = self::YEAR; /* Sabit bir özelliğe(değişken) sınıf içerisinden erişmek için self kullanılır. */

        return "$text - $isim ($kurulus)";
    }
}

$nesne = new Kutuphane;

echo $nesne->getInfo();
