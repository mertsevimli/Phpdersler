<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Git Sayfası</title>
</head>
<body>
    <center>
<?php
@$isim=$_POST["ad"];
@$sifre=$_POST["sifre"];
@$secenek=$_POST["secenek"];
@$cinsiyet=$_POST["cinsiyet"];
@$submit=$_POST["buton"];

if($submit)
{
    echo "Adınız:".$isim."<br>";
    echo "Şifreniz:".$sifre."<br>";
    echo "Seçenek:".$secenek."<br>";
    echo "Cinsiyet:".$cinsiyet."<br>";
}
else
{
    echo "Lütfen formu doldurunuz";
}


?>
</center>
</body>
</html>