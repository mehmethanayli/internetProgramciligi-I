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
        /* Yapıcı Metot Sınıf üzerinden bir nesne türetildiğinde çalışır. */
        function __construct()
        {
            echo "Bu sınıftan bir nesne türetildi ve constract çalıştı.<br><br><br>";
        }

        public $isim = "Kartel";

        public function selamVer()
        {
            echo "Merhaba Hoşgeldiniz - SelamVer";
        }

    }

    $kedi = new Personel;
    echo $kedi->isim;
    echo "<br>";
    $kedi->selamVer();







    ?>







</body>

</html>