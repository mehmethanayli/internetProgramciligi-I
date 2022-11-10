<?php

/* Final Metot */
class PersonelIslemleri
{

    public $isimSoyisim;
    public $gelir;
    public $gider;

    public function __construct($isim, $gelir, $gider)
    {
        $this->isimSoyisim = $isim;
        $this->gelir = $gelir;
        $this->gider = $gider;
    }
    /* aylikDurumHesapla metodu final olarak belilendiği için miras alınan hiçbir sınıf içerisinde tekrar oluşturulamaz */
    final public function aylikDurumHesapla()
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
    /* Hata: Cannot override final method PersonelIslemleri::aylikDurumHesapla() */
    public function aylikDurumHesapla()
    {
        echo "Sınıfımın aylıkDurumHesapla Metodu.";
    }

    public function yillikDurumHesapla()
    {
        return parent::yillikDurumHesapla();
    }
}



$dahili = new ElemanlarDahili("Ahmet Yılmaz", 25000, 2500);
echo $dahili->aylikDurumHesapla();
echo "<br>";
echo $dahili->yillikDurumHesapla();
