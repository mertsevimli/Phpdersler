<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//* $_FILES süper globali ile dosya yükleme işlemi yapılır.
//* Dosya yükleme işlemi için form etiketine enctype="multipart/form-data" eklenmeli */
//* Dosya yükleme işlemi için form methodu "post" olmalı */
//* Dosya yükleme işlemi için input type="file" olmalı */

//* $_FILES ['name'] => dosya adı
//* $_FILES ['type'] => dosya tipi
//* $_FILES ['size'] => dosya boyutu
//* $_FILES ['tmp_name'] => geçici dosya adı gecici sunucuda barındığı adres
//* $_FILES ['error'] => dosya yükleme hatası


if(isset($_FILES['dosya'])) :

    $hata = $_FILES['dosya']['error'];
    if($hata != 0) :
        echo "Dosya yüklenirken hata oluştu. Hata Kodu : $hata";
    else :
        $dosyaAdi = $_FILES['dosya']['name'];
        $dosyaTipi = $_FILES['dosya']['type'];
        $dosyaBoyutu = $_FILES['dosya']['size']; 
        
        if($dosyaBoyutu > (1024*1024*2)) :
            echo "Dosya boyutu 2MB'den büyük olamaz.";
        else :
            $dosyaTuru = array("image/jpeg", "image/png", "image/gif");
            if(!in_array($dosyaTipi, $dosyaTuru)) :
                echo "Sadece JPG, PNG ve GIF dosyaları yüklenebilir.";
            else :
                // Dosyayı yükleme işlemi
                $hedef = "uploads/".$dosyaAdi;
                if(move_uploaded_file($_FILES['dosya']['tmp_name'], $hedef)) :
                    echo "Dosya başarıyla yüklendi.";
                else :
                    echo "Dosya yükleme işlemi başarısız.";
                endif;
                endif;
            endif;
        endif;
    endif;
    ?>

    
    
</body>
</html>