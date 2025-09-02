<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İf Else</title>
</head>
<body>
    <?php
$a =6;
$b = 6;

// if ($a == $b ) {
//    echo"$a sayısı $b sayısından eşittir.";
// }

// else {
//    echo "Hayır Doğru değil";
// }
// if($a === $b) {
//     echo "Herşey Aynı.";
// } else  {
//     echo "Sorun Var";
// }
// a ile b nin veri tipleri aynı değerleri aynı  o yüzden herşey aynı çıktı veriyor.

// tek tırnak veya çift tırnak içindeki değerler string veri tipi olduğu için sonuc sorun var olarak dönüyor.

if($a > $b)
     {
echo "Evet Büüyk";
}
elseif($a === $b) {
    echo "evet aynı";
}
elseif($a < $b) {
    echo "Evet Küçük";
}
elseif($a != $b) {
    echo "Evet Eşit Değil";
}
else {
    echo "hiçbiri değil";
}
?>
    
</body>
</html>