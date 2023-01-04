<!-- 
    a.	Ogrenciler isimli bir sınıf (class) oluşturunuz. id, öğrenciNo, adi, soyadi, vize, final özelliklerini private tanımlayıp, construct metodunu bu değişkenleri parametre olarak alabilecek şekilde yazınız. (Bu sınıftan bir nesne oluşturulduğunda constract metotta bulunan değişkenlere değer atanmasının sağlanabileceği şekilde gerçekleştiriniz.)
    b.	Ogrenciler sınıfı içerisinde Get ve Set işlemi yapan 2 tane farklı metot yazınız. (örneğin öğrenci adını geri gönderen bir metot veya vize puanını alıp içerdeki vize notuna eşitleyen metot.)
    c.	Ogrenciler sınıfı içinde notHesapla isimli bir fonksiyon yazınız. Fonksiyon çalıştığında sınıf içinde tanımlanan vize ve final notlarının ortalamasını alıp geriye sonucu göndermesini sağlayınız.
    d.	Ogrenciler sınıfından bir nesne türetip yazmış olduğunuz get, set ve notHesapla fonksiyonlarını çalıştırınız.

-->

<?php

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


    public function ogrenciAdiGoster()
    {
        return $this->adi;
    }

    public function ogrenciAdiniDegistir($name)
    {
        $this->adi = $name;
    }
    public function yeniVizeNotuGir($vize)
    {
        $this->vize = $vize;
    }

    public function notHesapla()
    {
        $sonuc = (($this->vize) + ($this->final)) / 2;
        return $sonuc;
    }
}

$ogrenci1 = new Ogrenciler(1, "Ali", "Karabıyık", 50, "100");
echo $ogrenci1->ogrenciAdiGoster();
echo $ogrenci1->ogrenciAdiniDegistir("Ahmet");
echo $ogrenci1->notHesapla();


?>