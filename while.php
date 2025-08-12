<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Döngüsü</title>
</head>

<body>
    <?php

    //* GOTO: Döngüler
    //* GOTO, programın belirli bir etiketine atlamayı sağlar.
    //* Ancak, GOTO kullanımı genellikle önerilmez çünkü kodun okunabilirliğini azaltır ve karmaşık hale getirebilir.
    //* GOTO kullanımı yerine döngüler ve kontrol yapıları tercih edilmelidir. 


    //*Örnek GOTO Kullanımı
    // goto atla ;
    // echo "Selam";
    // atla:
    // echo " Burdayız";

//* GOTO ile Döngü Kullanımı
    for ($a = 1; $a < 5; $a++):
        if ($a == 3):
            goto yallah;

        endif;
    endfor;
    yallah:
    echo " Uçtum Geldim.";

    //*Foreach Döngüsü
    //* Dizi üzerinde döngü oluşturur ve her bir elemanı işler.
    //* Dizi elemanlarını tek tek alır ve $key ve $meyve değişkenlerine atar.
    //* $key, dizi elemanının anahtarını, $meyve ise dizi elemanının değerini temsil eder.
    // $dizi = array("Elma", "Armut", "araba", "boncuk", "Kivi");

    // foreach ($dizi as $key => $meyve) :

    //     echo $key. "  " . $meyve. "<br>";
    // endforeach;





    //*For Döngüsü
    //* Bu şekilde de yazılabilir.
    // for ($sayi = 1; $sayi <= 11; $sayi++) {
    //     echo "Sayı: $sayi <br>";
    // }


    // for($sayi = 1;  ;$sayi++) :
    //     if($sayi > 10) :
    //         break; // döngüyü sonlandırır
    //     endif;
    //     echo "Sayı: $sayi <br>";
    // endfor;

    //* Ortadakini kaldırırsan sonsuz döngü olur. Çünkü $sayi değişkeni her adımda artırılmıyor ve koşul sağlanıyor.
    //* For Döngüsü, $sayi değişkenini 1'den 10'a kadar artırır ve her adımda sayıyı ekrana yazdırır.






    //* Do While Döngüsü Döngüyü 1 kez çalıştırır ve ardından koşulu kontrol eder. Koşul doğruysa döngü devam eder.


    //     $sayi = 10;
    // do {
    // echo "merhaba";
    // }
    // while ($sayi< 10);






    //*While Döngüsü

    //     $sayi = 5;
    //     while ($sayi  <= 10) :

    //         echo " $sayi"."<br>";
    //         $sayi++;
    //   endwhile;
    //     echo "Döngü bitti. Son sayı: $sayi";






    ?>

</body>

</html>