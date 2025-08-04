<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantiksal Opt.</title>
</head>
<body>
    <?php
// Mantıksal Operatörler

$t = 5;
$k = 9;
$c = 10;

// Mantıksal operatörler, koşullu ifadelerde kullanılır ve genellikle boolean değerlerle çalışır.
// && (ve), || (veya), ! (değil) gibi operatörler kullanılır.
/*
and (&&): İki koşulun da doğru olması durumunda true döner.
or (||): İki koşuldan en az birinin doğru olması durumunda true döner.
xor: İki koşuldan sadece birinin doğru olması durumunda true döner.
! (değil): Koşulun tersini alır, eğer koşul doğruysa false, yanlışsa true döner.
*/
if($t < $k || $c < $t):
echo "olumlu";
else:
    echo "olumsuz";
endif;

    

    ?>
</body>
</html>