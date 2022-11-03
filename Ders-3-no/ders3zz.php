<?php


class DersIcerikleri
{

    public function Java()
    {
        return "Java Kurs İçeriği";
    }

    public function Php()
    {
        return "Php Kurs İçeriği";
    }

    public function Sql()
    {
        return "sql Kurs İçeriği";
    }
}

class Egitmenler extends DersIcerikleri
{
    public function Java()
    {
        $kim = "Erkan Güler - " . parent::Java();
        return $kim;
    }

    public function Php()
    {
        $kim = "Mehmet Hanaylı - " . parent::Php();
        return $kim;
    }

    public function Sql()
    {
        $kim = "Taner Karataş -" . parent::Sql();
        return $kim;
    }

    /* Miras alınan sınıfın içerisindeki metodu çağır. */
    public function extendMetod()
    {
        return parent::Java();
    }

    /* Bu sınıfın içerisindeki metodu çağır. */
    public function sinifinMetodu()
    {
        return $this->java();
    }
}

$egitmenler = new Egitmenler;

echo $egitmenler->extendMetod();
echo "<br>";
echo $egitmenler->sinifinMetodu();
echo "<br>";
echo $egitmenler->java();
