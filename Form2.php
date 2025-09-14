<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3> Form Uygulama</h3>
    <hr>
   <form action="git.php" method="post">
  Adınız: <input type="text" placeholder="Adınız" required="required" name="ad"> <br><br> <!-- required zorunlu alan demek  placeholder ise doldurmandan önce içinde yazan yazı--> 
  Şifreniz: <input type="password" name="sifre"><br><br>
  <input type="submit" name="buton"  value="Gönder">
  <input type="reset" name="reset" value="Sıfırla">

<select name="secenek">
<option value="0">Seç</option>
<option value="1">Şikayet</option>
<option value="2">Öneri</option>


<input type ="radio" name="cinsiyet" value="E">Erkek
<input type ="radio" name="cinsiyet" value="K">Kadın
<input type = "radio" name="cinsiyet" value="3">Diğer</input>


</select>




</form>

    </center>
</body>
</html>