<?php


class Dersler
{

    public function java()
    {
        return "Java Kurs İçeriği";
    }

    public function css()
    {
        return "CSS Kurs İçeriği";
    }

    public function php()
    {
        return "PHP Kurs İçeriği";
    }
}

class Egitmenler extends Dersler
{
    public function java()
    {
        $kim = "Erkan Güler -" . parent::java();
        return $kim;
    }

    public function css()
    {
        $kim = "Taner Karataş - " . parent::css();
        return $kim;
    }

    public function php()
    {
        $kim = "Mehmet Can Hanaylı - " . parent::php();
        return $kim;
    }
}

$nesne = new Egitmenler;

echo $nesne->java();
echo "<br>";
echo $nesne->css();
echo "<br>";
echo $nesne->php();
