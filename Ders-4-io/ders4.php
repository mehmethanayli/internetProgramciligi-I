<?php

class Islemler
{

    public $isimSoyisim;
    public $gelir;
    public $gider;

    public function isimEkle($isimSoyisim)
    {
        $this->isimSoyisim = $isimSoyisim;
    }

    public function gelirEkle($aylikGelir)
    {
        $this->gelir = $aylikGelir;
    }

    public function giderEkle($aylikGider)
    {
        $this->gider = $aylikGider;
    }


    public function aylikDurumHesapla()
    {
        $netKazanc =  $this->gelir - $this->gider;
        return $netKazanc;
    }

    public function yillikKazanc()
    {
        $yillikKazanc = ($this->gelir - $this->gider) * 12;
        return $yillikKazanc;
    }
}

class ElemanlarDahili extends Islemler
{
    /* Firmada çalışan elemanlar. */
}

class ElemanlarHarici extends Islemler
{
    /* Firmanın hizmet aldığı elemanlar. */
    /* Extend alınan sınıf içerisindeki aynı isimli metot ezildi. Yani bu sınıf içerisindeki metot çalıştı. */
    public function yillikKazanc()
    {
        return "Kazanamadı";
    }
}


$dahili1 = new ElemanlarDahili();
$dahili1->isimEkle("Mehmet");
$dahili1->gelirEkle(5000);
$dahili1->giderEkle(3500);
echo $dahili1->aylikDurumHesapla();
echo "<br>";
echo $dahili1->yillikKazanc();


echo "<br>";

$harici1 = new ElemanlarHarici();
$harici1->isimEkle("Ayşen");
$harici1->gelirEkle(8000);
$harici1->giderEkle(3500);
echo $harici1->aylikDurumHesapla();
echo "<br>";
echo $harici1->yillikKazanc();
