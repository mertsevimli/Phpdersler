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



/*
$_FILES['dosya'] name 	Gönderilen dosyanın adı
$_FILES['dosya'] type 	Gönderilen dosyanın tipi
$_FILES['dosya'] tmp_name 	Gönderilen dosyanın geçici olarak sunucuda barındığı adres.
$_FILES['dosya'] size 	Gönderilen dosyanın bayt cinsinden boyutu
$_FILES['dosya'] error 	Dosya gönderilirken gerçekleşen hata kodu

*/
   
if(isset($_FILES['dosya'])){
	   
			 $hata = $_FILES['dosya']['error'];
			   if($hata != 0)
			   {
				  echo 'Yüklenirken bir hata gerçekleşmiş.';
			   } 
			   else 
			   { 
				  $boyut = $_FILES['dosya']['size'];
				  
				  if($boyut > (1024*1024*5))
				  {
					 echo 'Dosya 5MB den büyük olamaz.';
				  } 
				  
				  else {
					 $tip = $_FILES['dosya']['type'];
					 $isim = $_FILES['dosya']['name'];
					 $uzanti = explode('.', $isim);
					 $uzanti = $uzanti[count($uzanti)-1];
					 // dosya.04.png
					 $dosyaformati = array("image/png", "image/jpeg","image/gif"); 
					/* $isim değişkeninin içeriğini bu noktalardan ayırarak bir dizi değer elde ediyoruz.
					Bu dizinin son elemanı dosyanın uzantısını ifade gösterir bu durumda.
					Dizinin son elemanının numarası da, elemanSayisi-1 dir.*/

											
					 	if(!in_array($tip, $dosyaformati)) {
						echo 'Yanlızca PNG veya JPG dosyaları gönderebilirsiniz.<br>';
							echo $tip;					
					 	} 
					
						else {
						$dosya = $_FILES['dosya']['tmp_name'];
						$olustur= mt_rand(0,256541);
						move_uploaded_file($dosya, 'dosya/' . $olustur.".".$uzanti);
						
						//$tarih=date ("d.m.Y");
						//copy($dosya, 'dosya/' . $tarih.".".$uzanti);
						
						//$olustur= mt_rand(0,256541);
						//copy($dosya, 'dosya/' . $olustur.".".$uzanti);
						
						//$olustursifre= md5(mt_rand(0,1000));
						//copy($dosya, 'dosya/' . $olustursifre.".".$uzanti);						
						
						
						
						
						echo 'Dosyanız upload edildi!';
				
						}
			     } 
  
  
  			 }
   
   
}
   
   
   
   
   
   
   







?>

    
    
</body>
</html>