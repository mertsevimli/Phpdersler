<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
    <h3>Form Uygulama</h3>
    <hr>
    <form action="git.php" method="post">
      Adınız: <input type="text" placeholder="Adınız" required name="ad"><br><br>
      Şifreniz: <input type="password" name="sifre"><br><br>

      <select name="secenek" required>
        <option value="" disabled selected>Seçiniz...</option>
        <option value="Şikayet">Şikayet</option>
        <option value="Öneri">Öneri</option>
      </select>
      <br><br>

      <input type="radio" name="cinsiyet" value="E"> Erkek
      <input type="radio" name="cinsiyet" value="K"> Kadın
      <input type="radio" name="cinsiyet" value="Gay"> Diğer
      <br><br>

      <input type="submit" name="buton" value="Gönder">
      <input type="reset" name="reset" value="Sıfırla">
    </form>
  </center>
</body>
</html>