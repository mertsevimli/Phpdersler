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
// Hataları gör (geliştirme aşamasında faydalı)
error_reporting(E_ALL);
ini_set('display_errors', 1);

$islem  = $_GET['islem'] ?? '';
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($islem === 'git' && $method === 'POST') {
    // Önce POST'u oku
    $isim = $_POST['isim']    ?? '';
    $sifre= $_POST['sifre']   ?? '';
    $sec  = $_POST['secenek'] ?? '';
    $tas  = $_POST['tasarim'] ?? '';

    // Basit doğrulama
    $hatalar = [];
    if ($isim === '') { $hatalar[] = 'İsim zorunlu.'; }
    if ($sec  === '') { $hatalar[] = 'Bir seçenek seçiniz.'; }
    if ($tas  === '') { $hatalar[] = 'Bir tasarım seçiniz.'; }

    if ($hatalar) {
        echo '<div style="color:#b00"><strong>Lütfen düzeltin:</strong><ul>';
        foreach ($hatalar as $h) echo '<li>'.htmlspecialchars($h,ENT_QUOTES,'UTF-8').'</li>';
        echo '</ul></div>';
    } else {
        // Güvenli yazdır
        echo "Gelen isim : "   . htmlspecialchars($isim, ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Gelen sifre : "  . htmlspecialchars($sifre, ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Gelen secenek : ". htmlspecialchars($sec,   ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Gelen tasarim : ". htmlspecialchars($tas,   ENT_QUOTES, 'UTF-8') . "<br><br>";
    }
}
// else: form her durumda aşağıda görünecek
?>

<form action="Form2.php?islem=git" method="post">
    <input type="text" name="isim" placeholder="Adınızı Yazınız" required><br><br>
    <input type="password" name="sifre"><br><br>

    <select name="secenek" required>
        <option value="" disabled selected>Seçiniz...</option>
        <option value="Şikayet">Şikayet</option>
        <option value="Öneri">Öneri</option>
    </select><br><br>

    <label><input type="radio" name="tasarim" value="soft"  required> Soft</label><br>
    <label><input type="radio" name="tasarim" value="dark">  Dark</label><br>
    <label><input type="radio" name="tasarim" value="beyaz"> Beyaz</label><br><br>

    <input type="submit" value="Gönder">
    <input type="reset"  value="Sıfırla">
</form>

</center>
<?php
?>
</body>
</html>