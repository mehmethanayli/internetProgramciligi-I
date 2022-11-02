<?php

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
}


$dahili1 = new ElemanlarDahili("Mehmet", 5000, 1500);
echo $dahili1->aylikDurumHesapla();
echo "<br>";
echo $dahili1->yillikKazanc();


echo "<br>";

$harici1 = new ElemanlarHarici("Ayşen", 8000, 3500);
echo $harici1->aylikDurumHesapla();
echo "<br>";
echo $harici1->yillikKazanc();
