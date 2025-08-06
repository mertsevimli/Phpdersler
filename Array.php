<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array List</title>
</head>
<body>
    <?php

// $kalemler = array("Kalem", "Silgi", "KalemTraş", "Dolma Kalem");

// echo $kalemler[0] . "<br>";
// echo $kalemler[1] . "<br>";
// echo $kalemler[2] . "<br>";
// echo $kalemler[3] . "<br>";

// echo "<hr>";
// Numaralarndırmalar ilk 0 la baslar

// $kalemler[] = "Kalem4";
// $kalemler[] = "Kalem5";

// echo $kalemler[4] . "<br>";
// echo $kalemler[5] . "<br>";

// Yukarıdaki gibi ekleme yaparsak, dizinin sonuna ekler. Farklı bir şekilde eklemek için kullanırız:

// $kalemler[3] = "Kalem4"; // 3. indexi değiştirir
// echo $kalemler[3] . "<br>";

$kalemler = array("ad" => "Kalem", "Silgi", "KalemTraş", "Dolma Kalem");
echo $kalemler["ad"]."<br>";
    ?>
</body>
</html>