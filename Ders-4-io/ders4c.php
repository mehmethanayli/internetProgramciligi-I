<?php

/* Final Metot Örneği */
class Islemler
{
    public $isimSoyisim;
    public $gelir;
    public $gider;

    function __construct($isimSoyisim, $gelir, $gider)
    {
        $this->isimSoyisim = $isimSoyisim;
        $this->gelir = $gelir;
        $this->gider = $gider;
    }

    /* aylikDurumHesapla metodu final olarak belirlendiği için miras alınan hiçbir sınıf içerisinde tekrar oluşturulamaz.*/
    final public function aylikDurumHesapla()
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

    public function aylikDurumHesapla()
    {
        return "Firma Elemanları İçin Hazırlandı.";
    }

    public function ustSinifinMetodu()
    {
        $metot = parent::yillikKazanc();
        return $metot;
    }
}


$dahili1 = new ElemanlarDahili("Mehmet", 5000, 1500);

echo $dahili1->aylikDurumHesapla();
/* Oluşan  Hata : Cannot override final method Islemler::aylikDurumHesapla() in ... */