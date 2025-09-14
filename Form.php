<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Elementleri</title>
</head>
<>


<form id="ornekForm">
  <!-- Yalnızca okunur; kullanıcı değiştiremez, reset de görünür etki yaratmaz -->
  <input type="text" name="ad" readonly value="php"><br>

  <input type="password" name="sifre" placeholder="Şifrenizi giriniz"><br>

  <!-- type="file" reset ile temizlenir -->
  <input type="file" name="dosya"><br>

  <!-- hidden alan da reset’lenir ama görünmez -->
  <input type="hidden" name="yas" value="25"><br>

  <input type="datetime-local" name="tarih_saat"><br>

  <input type="time" name="saat"><br>

  <input type="number" name="adet" min="0" max="10"><br>

  <input type="password" name="sifre2"><br>

  <!-- Aynı name ile grup olur; reset, başlangıç checked durumuna döndürür -->
  <input type="radio" name="secenek" value="0" checked> 0
  <input type="radio" name="secenek" value="21"> 21
  <input type="radio" name="secenek" value="ok"> ok<br>

  <input type="color" name="renk" value="#000000"> Kitap<br>

  <!-- min/max ekleyin; reset başlangıç value’suna döndürür -->
  <input type="range" name="hacim" min="0" max="100" value="75"><br>

  <select name="sehir">
    <option value="istanbul" selected>İstanbul</option>
    <option value="ankara">Ankara</option>
    <option value="izmir">İzmir</option>
  </select>
  <br><br>

  <button type="reset">Sıfırla</button>
  <button type="submit">Gönder</button>
</form>

  
</body>
</html>