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

        /* Özellikler - Attributes */
        public $isim = "Ahmet";
        public $soyisim = "Varol";

        var $cinsiyet = "erkek";

        public const GSM = "05342026807";
        public const ADRES = "Adu - Aymes Bilgisayar Lab.";
        /* Özellikler - Attributes */


        /* Fonksiyonlar - Functions */
        public function selamVer()
        {
            echo "Merhaba Hoşgeldiniz - SelamVer";
        }

        public function selamVer2()
        {
            return "Merhaba Hoşgeldiniz. - SelamVer2";
        }
        /* Fonksiyonlar - Functions */
    }


    $nesne = new Personel;

    echo "<br>Normal bir özellik(attribute) nesne üzerinden -> işareti ile çağırılır.<br><br>";

    echo "$nesne->isim  $nesne->soyisim";

    echo "<br>";
    echo $nesne->cinsiyet;
    echo "<br>";


    echo "<br>Sabit bir özellik(attribute) nesne üzerinden :: işareti ile çağırılır.<br><br>";

    echo "<br>";
    echo $nesne::GSM;
    echo "<br>";



    echo "<br>Nesne içerisindeki bir fonksiyon -> işareti ile çağırılır.<br><br>";
    $nesne->selamVer();  //Fonksiyonun kendisi içinde ekrana çıktı vermektedir.

    echo "<br><br>";

    $selamSonuc = $nesne->selamVer2();  //Fonksiyonun kendisi içinde ekrana çıktı vermemektedir. Çalıştığında değeri geri göndermektedir(return). Bu değer değişkene atanabilir veya ekrana echo komutu ile yazdırılabilir.

    echo $selamSonuc;


    ?>







</body>

</html>