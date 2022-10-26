<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nesne Temelli Web Programlama</title>
</head>

<body>

    <?php


    class Personel
    {

        /* Attributes - Özellikler */
        public $id = "1";
        public $ad = "Eren";
        public $yas = 22;

        var $cinsiyet = "Erkek";

        public const TCNO = 111111;


        /* Fonksiyonlar */
        public function selamVer1()
        {
            echo "Merhaba Selamver1 Çalıştı.";
        }

        public function selamVer2()
        {
            return "Merhaba Selamver2 Çalıştı.";
        }
    }


    $nesne = new Personel;

    echo "<br>Normal bir özellik(attribute) nesne üzerinden -> işareti ile çağırılır.<br><br>";


    echo $nesne->ad;
    echo "<br><br>";
    echo $nesne->cinsiyet;
    echo "<br><br>";
    echo "<br>Sabit bir özellik(attribute) nesne üzerinden :: işareti ile çağırılır.<br><br>";

    echo $nesne::TCNO;

    echo "<br><br>";

    $nesne->selamVer1();
  
    echo "<br><br>";

    $gelenDeger= $nesne->selamVer2();

    echo $gelenDeger;






    ?>







</body>

</html>