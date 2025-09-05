<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Elementleri</title>
</head>
<body>


//* kullanıcıdan feedback almak için kullanılır

<br>
   <input type="text" name="ad" placeholder="Adınızı giriniz"><br>
<input type="password" name="sifre" placeholder="Şifrenizi giriniz"><br>
<input type="email" name="email" placeholder="Email giriniz"><br>
<input type="number" name="yas" placeholder="Yaşınızı giriniz"><br>
<input type="date" name="dogumtarihi" placeholder="Doğum tarihinizi giriniz"><br>

<input type="radio" name="cinsiyet" value="erkek"> Erkek<br>
<input type="radio" name="cinsiyet" value="kadin"> Kadın<br>

<input type="checkbox" name="hobiler[]" value="spor"> Spor<br>
<input type="checkbox" name="hobiler[]" value="muzik"> Müzik<br>
<input type="checkbox" name="hobiler[]" value="kitap"> Kitap<br>

<select name="sehir">
    <option value="istanbul">İstanbul</option>
    <option value="ankara">Ankara</option>
    <option value="izmir">İzmir</option>
</select>


  
</body>
</html>