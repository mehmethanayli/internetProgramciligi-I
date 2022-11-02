<?php

/* Final Class Örneği */


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

final class ElemanlarDahili extends Islemler
{
    /* Firmada çalışan elemanlar. */
}


/* Final Class Başka bir class tarafından miras alınamaz. */
class ElemanlarDahili2 extends ElemanlarDahili
{
    /* Hata: Class ElemanlarDahili2 may not inherit from final class */
}
