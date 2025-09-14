<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Git Sayfası</title>
</head>
<body>
<?php
// GET ile gelen verileri al
$isim  = $_POST['ad']    ?? '';
$sifre = $_POST['sifre'] ?? '';

// Güvenlik için htmlspecialchars ile yazdır
echo "Adınız: " . htmlspecialchars($isim) . "<br>";
echo "Şifreniz: " . htmlspecialchars($sifre) . "<br>";
?>
</body>
</html>