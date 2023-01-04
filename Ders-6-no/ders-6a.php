<!-- 
    a.	Ogrenciler isimli bir sınıf (class) oluşturunuz. id, öğrenciNo, adi, soyadi, vize, final özelliklerini private tanımlayıp, construct metodunu bu değişkenleri parametre olarak alabilecek şekilde yazınız. (Bu sınıftan bir nesne oluşturulduğunda constract metotta bulunan değişkenlere değer atanmasının sağlanabileceği şekilde gerçekleştiriniz.)
    b.	Ogrenciler sınıfı içerisinde Get ve Set işlemi yapan 2 tane farklı metot yazınız. (örneğin öğrenci adını geri gönderen bir metot veya vize puanını alıp içerdeki vize notuna eşitleyen metot.)
    c.	Ogrenciler sınıfı içinde notHesapla isimli bir fonksiyon yazınız. Fonksiyon çalıştığında sınıf içinde tanımlanan vize ve final notlarının ortalamasını alıp geriye sonucu göndermesini sağlayınız.
    d.	Ogrenciler sınıfından bir nesne türetip yazmış olduğunuz get, set ve notHesapla fonksiyonlarını çalıştırınız.
-->
<?php

use Ogrenciler as GlobalOgrenciler;

class Ogrenciler
{
    private $id;
    private $ogrenciNo;
    private $adi;
    private $soyadi;
    private $vize;
    private $final;
    public function __construct($ogrenciNo, $adi, $soyadi, $vize, $final)
    {
        $this->ogrenciNo = $ogrenciNo;
        $this->adi = $adi;
        $this->soyadi = $soyadi;
        $this->vize = $vize;
        $this->final = $final;
    }

    public function isimGetir()
    {
        return $this->adi;
    }

    public function vizeNotuDegistir($yeniNot)
    {
        $this->vize = $yeniNot;
    }
    public function notHesapla()
    {
        return (($this->vize) + ($this->final)) / 2;
    }
}


$ogrenci1 = new Ogrenciler("123", "Ali", "Güler", 16, 100);
echo $ogrenci1->isimGetir();
echo $ogrenci1->vizeNotuDegistir(50);
echo $ogrenci1->notHesapla();




?>