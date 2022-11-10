<?php

/* Final Class */


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

    public function aylikDurumHesapla()
    {
        return ($this->gelir - $this->gider);
    }

    public function yillikDurumHesapla()
    {
        return (($this->gelir - $this->gider) * 12);
    }
}

final class ElemanlarDahili extends PersonelIslemleri
{
    /* Firmada çalışan elemanlar. */
}

/* Final Class başka bir class tarafından miras alınamaz. */
class ElemanlarDahili2 extends ElemanlarDahili{
    /* Class ElemanlarDahili2 may not inherit from final class */
}


$dahili = new ElemanlarDahili("Ahmet Yılmaz", 25000, 2500);
echo $dahili->aylikDurumHesapla();
echo "<br>";
echo $dahili->yillikDurumHesapla();
