<?php


class PersonelIslemleri
{

    public $isimSoyisim;
    public $gelir;
    public $gider;

    public function isimEkle($nameSurname)
    {
        $this->isimSoyisim = $nameSurname;
    }

    public function gelirEkle($income)
    {
        $this->gelir = $income;
    }

    public function giderEkle($expense)
    {
        $this->gider = $expense;
    }

    public function aylikDurumHesapla()
    {
        return ($this->gelir - $this->gider);
    }

    public function yillikDurumHesapla()
    {
        return (($this->gelir - $this->gider) * 12);
    }
}

class ElemanlarDahili extends PersonelIslemleri
{
    /* Firmada Çalışan Personeller */

    public function aylikDurumHesapla()
    {
        return parent::yillikDurumHesapla();
    }

    public function yillikDurumHesapla()
    {
        return "Şirket içindeki personelin yıllık durumu burada hesaplanır.";
    }
}


class ElemanlarHarici extends PersonelIslemleri
{
    /* Firmada Dışı Çalışan Personeller */
}


$dahili = new ElemanlarDahili();
$dahili->isimEkle("Ahmet Yılmaz");
$dahili->gelirEkle(25000);
$dahili->giderEkle(2500);
echo $dahili->aylikDurumHesapla();
echo "<br>";
echo $dahili->yillikDurumHesapla();


echo "<br><br><br> Şirket Dışı Eleman:";
$harici = new ElemanlarHarici();
$harici->isimEkle("Mehmet Yılmaz");
$harici->gelirEkle(2200);
$harici->giderEkle(25);
echo $harici->aylikDurumHesapla();
echo "<br>";
echo $harici->yillikDurumHesapla();