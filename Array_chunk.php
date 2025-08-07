<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array chunk</title>
</head>
<body>
    <?php
// array_chunk() ile diziyi parçalara ayırma

$elemanlar = array("elma", "armut", "muz", "çilek" , "kivi", "portakal", "erik", "karpuz","çilek", "kavun", "nar");
echo "<pre>";
print_r(array_chunk($elemanlar, 3)); 
print_r(array_chunk($elemanlar, 3, true)); // true parametresi ile anahtarları korur
echo "<pre>";

    ?>
</body>
</html>