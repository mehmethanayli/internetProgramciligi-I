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
    private $libraryName = "Adu Kütüphane"; /* Dışardan erişilemez */
    private const YEAR = 1980; /* Dışardan erişilemez */

    private function getInfo() /* Dışardan erişilemez */
    {
        $text = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";
        return $text;
    }
}

$nesne = new Kutuphane;

echo "Kütüphanenin Adı:" . $nesne->libraryName;  /* private olduğu için hata fırlatır. */
echo "<br>";
echo "Kütüphanenin Kuruluş Yılı:" . $nesne::YEAR;/* private olduğu için hata fırlatır. */
echo "<br>";

echo $nesne->getInfo(); /* private olduğu için hata fırlatır. */
