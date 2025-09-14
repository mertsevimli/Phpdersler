<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Uygulama</title>
</head>
<body>
<center>
    <h3>Form Uygulama</h3>
    <hr>
<?php

$sayfa=$_GET["islem"];
switch($sayfa):
    case "git":
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isim   = $_POST["isim"]    ?? '';
    $sifre  = $_POST["sifre"]   ?? '';
    $sec    = $_POST["secenek"] ?? '';
    $tas    = $_POST["tasarim"] ?? '';

    echo "Gelen isim : "   . $isim . "<br>";
    echo "Gelen sifre : "  . $sifre . "<br>";
    echo "Gelen secenek : ". $sec . "<br>";
    echo "Gelen tasarim : ". $tas . "<br>";
} else {
    echo "Lütfen formu doldurup gönderin.";
}
        break;
    default:
    ?>

    <form action="Form2.php?islem=git" method="post">
        <input type="text" name="isim" placeholder="Adınızı Yazınız" required><br><br>
        <input type="password" name="sifre"><br><br>

        <select name="secenek">
            <option value="Seçilmemiş">Seç</option>
            <option value="Şikayet">Şikayet</option>
            <option value="Öneri">Öneri</option>
        </select><br><br>

        <input type="radio" name="tasarim" value="soft"> Soft<br>
        <input type="radio" name="tasarim" value="dark"> Dark<br>
        <input type="radio" name="tasarim" value="beyaz"> Beyaz<br><br>

        <input type="submit" name="buton" value="Gönder"><br><br>
        <input type="reset" name="reset" value="Sıfırla"><br><br>
    </form>

</center>
<?php        
endswitch;



?>
</body>
</html>