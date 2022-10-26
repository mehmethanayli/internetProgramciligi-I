<?php

/* ******************* */
class Welcome
{
    public function hello($isim = "john", $soyisim = "doe")
    {
        $text = "Hoşgeldiniz Sayın $isim $soyisim";
        return $text;
    }
}
/* ******************* */

$nesne = new Welcome;
$hello1 = $nesne->hello();
$hello2 = $nesne->hello("Ayşe", "Yenilmez");

$isim = "Ahmet";
$soyisim = "Kara";
$hello3 = $nesne->hello($isim, $soyisim);

echo "<br>";
echo $hello1;
echo "<br>";
echo $hello2;
echo "<br>";
echo $hello3;