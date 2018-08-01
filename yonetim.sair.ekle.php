<?php

  @session_start();
  if($_SESSION["GirisYapti"] <> 1) {
    header("Location: giris.yap.php");
    die();
  }


  if(isset($_POST["Editor"])) {
    // Formun Kaydedilmesi istenmiş...

    // Dosya sayısını bulalım
    $arrDosyalar = glob("M*.md");
    $Adet = count($arrDosyalar);
    $Adet++; // Yeni dosyanın numarası bulundu :)
    $DosyaAdi = sprintf("%04d", $Adet);
    $DosyaAdi = "M$DosyaAdi.md";

    $DosyaIcerigi = $_POST["Editor"];
    file_put_contents($DosyaAdi, $DosyaIcerigi);
    echo "<h1>Kayıt Başarılı!</h1>";
    echo "<a href='index.php'>Ana sayfa...</a>";
    die();
  }

?>
<!DOCTYPE html>
<html lang="tr" >
  <head>
    <meta charset="utf-8">
    <title>Yeni Şair Ekle</title>
  </head>
  <body>
    <h1>Yeni Şair Ekle</h1>

    <form method="post">
        <input type="submit" value="Şairi Sisteme Ekle!"><br>
        <textarea name="Editor" rows="10" cols="80"></textarea>
    </form>

  </body>
</html>
