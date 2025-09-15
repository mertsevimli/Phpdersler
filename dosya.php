<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Uygulaması</h3>
    <hr>

    <form action = "dosya2.php" method="post" enctype="multipart/form-data">

<input type="file" name="dosya" placeholder="Adınız"><br><br>
<input type="submit" value="Yükle">

<!-- dosya transferi için form etiketine enctype="multipart/form-data" eklenmeli -->

    </form>

   
    
</body>
</html>