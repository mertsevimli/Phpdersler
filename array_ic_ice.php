<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İç içe dizi oluşturma</title>
</head>

<body>
    <?php
    $kalemler["kalemler"] = array(
        "Renk" => array("mavi", "kırmızı", "yeşil"),
        "Tip" => array("Kurşun", "Tükenmez", "Mekanizma"),
        "Kalite" => array("Düşük", "Orta", "Yüksek"),

    );
    echo "Renk : " . $kalemler["kalemler"]["Renk"][2] . "<br>";
    echo "Tip : " . $kalemler["kalemler"]["Tip"][2] . "<br>";
    echo "Kalite : " . $kalemler["kalemler"]["Kalite"][2] . "<br>";

    ?>
</body>

</html>