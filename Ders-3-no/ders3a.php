<?php

/* *************** */
class Welcome
{
    public function hello($isim = "John", $soyisim = "Doe")
    {
        $text = "Merhaba Sisteme Giriş Yaptınız: $isim $soyisim";
        return $text;
    }
}
/* *************** */


$nesne = new Welcome;

echo $hello1 = $nesne->hello("Ahmet", "Yenilmez");
echo "<br>";

echo $hello2 = $nesne->hello();
echo "<br>";

$isim = "Ayşe";
$soyisim = "Can";
/* Parametrelerin sırası önemli. */
echo $hello3 = $nesne->hello($soyisim, $isim);
