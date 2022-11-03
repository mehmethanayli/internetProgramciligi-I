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

/* Private */
class Kutuphane
{
    private $libraryName = " Adü Kütüphane"; /* Dışardan erişilemez */
    private const YEAR = 1980; /* Dışardan erişilemez */

    private function getInfo() /* Dışardan erişilemez */
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermektedir";
        return $text;
    }

    /* Fonksiyon ile private bir özellik değiştirilebilir. */
    public function kutuphaneninAdiniDegistir($kutuphaneAdi)
    {
        $this->libraryName = $kutuphaneAdi;
    }

    /* Fonksiyon ile private bir özellik dışarıya gönderildi. */
    public function KutuphaneAdiniGetir()
    {
        return  $this->libraryName;
    }

    /* Fonksiyon ile private bir özellik dışarıya gönderildi. */
    public function yilGoster()
    {
        return self::YEAR;
    }

    /* Fonksiyon ile private bir özellik dışarıya gönderildi. */
    public function bilgigoster()
    {
        return  $this->getInfo();
    }
}

$nesne = new Kutuphane;

/* Class içindeki Private Değişken ve Fonksiyonlara Erişmek */
echo $nesne->KutuphaneAdiniGetir();
echo "<br>";
echo $nesne->yilGoster();
echo "<br>";
echo $nesne->bilgigoster();

/* Private olan kütüphane isminin, public bir fonksiyon yardımıyla değiştirilmesi. */
echo $nesne->kutuphaneninAdiniDegistir("Kayseri Kütüphanesi");
echo "<br>";
echo $nesne->KutuphaneAdiniGetir();  ///Kütüphanenin değiştirilen ismi gelecektir.


echo "<br>";
echo "Kütüphanenin Adı: $nesne->libraryName"; /* private olduğu için hata fırlatır. */
echo "<br>";
echo "Kütüphanenin Kuruluş Yılı: " . $nesne::YEAR; /* private olduğu için hata fırlatır. */
echo "<br>";
echo $nesne->getInfo(); /* private olduğu için hata fırlatır. */
