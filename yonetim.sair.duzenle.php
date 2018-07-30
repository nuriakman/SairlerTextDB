<?php

  if(isset($_POST["Editor"])) {
    // Form gönderilmiş. Biz de kaydedelim...
    $DosyaIcerigi = $_POST["Editor"];
    $DosyaAdi = $_POST["dosya_adi"];
    file_put_contents($DosyaAdi, $DosyaIcerigi);
    echo "<h1>Güncelleme Başarılı!</h1>";
    echo "<a href='index.php'>Ana sayfa...</a>";
    die();
  }

  $ID = $_GET["id"];
  $DosyaAdi = sprintf("%04d", $ID);
  $DosyaAdi = "M$DosyaAdi.md";
  $DosyaIcerigi = file_get_contents($DosyaAdi);
?>
<!DOCTYPE html>
<html lang="tr" >
  <head>
    <meta charset="utf-8">
    <title>Yeni Şair Ekle</title>
  </head>
  <body>
    <h1>Şair Bilgilerini Güncelle</h1>

    <form method="post">
        <input type="submit" value="Güncellemeleri Kaydet!"><br>
        <textarea name="Editor" rows="10" cols="80"><?=$DosyaIcerigi?></textarea>
        <input type="hidden" name="dosya_adi" value="<?=$DosyaAdi?>">
    </form>

  </body>
</html>
