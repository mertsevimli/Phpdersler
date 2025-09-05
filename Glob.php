<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dizin işlemleri sistemi</title>
</head>
<body>
    <?php

//*Glob ile dosya okuma (klasör içindeki tüm dosyaları okur ve listeler)


// foreach (glob("*") as $dosya):
//     echo '<a href="' . $dosya . '">' . $dosya . '</a><br>';
// endforeach;

//*Scandir ile dosya okuma (klasör içindeki tüm dosyaları okur ve listeler)

//*Görmek istediğimiz dizini parantez içine yazabiliriz. Örnek: ("/home/user/public_html")
//*Eğer boş bırakılırsa mevcut dizini okur.

// $dosyalar = scandir(".");
// foreach ($dosyalar as $dosya):

//     if($dosya=="."|| $dosya=="." || $dosya=="..") continue;
//     echo '<a href="' . $dosya . '">' . $dosya . '</a><br>';
// endforeach;

//*rename
// if (file_exists("Özel/gereksiz.txt")) {
//     echo "Dosya var";
// } else {
//     echo "Dosya yok";
//     }

    //*  @ işareti hatayı gizler hatayı göstermez 

    

// @rename("Özel/merhaba2.txt", "Özel/gereksiz.txt");

// echo "content=\"width=device-width";
//* is_file dosya mı değil mi kontrol eder. true false döner
        // if (is_file("Özel/gereksiz.txt")) :
        //     echo "Dosya var";
        // else :
        //     echo "Dosya yok";
        // endif;


    ?>
</body>
</html>