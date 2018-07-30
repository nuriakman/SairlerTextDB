<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title>Türk Şairleri</title>
    <link rel="stylesheet" href="stil.css">
  </head>
  <body>
    <h1 class="LOGOBASLIK">Türk Şairleri</h1>
      <ul>
        <?php
          $arrSairler = glob("M*.md");
          foreach ($arrSairler as $Sair) {
            $arrDosya = file($Sair);
            $SairAdi = $arrDosya[0];
            $SairAdi = substr($SairAdi, 2);
            $SayfaNo = substr($Sair, 1, 4);
            $SayfaNo = substr($Sair, 1, 4);
            $SayfaNo = intval($SayfaNo);
            echo "<li>";
            echo "<a href='yonetim.sair.duzenle.php?id=$SayfaNo'>Düzenle</a>&nbsp;&nbsp;";
            echo "<a href='sair.php?sair=$SairAdi&id=$SayfaNo'>$SairAdi</a>";
            echo "</li>";
          }
        ?>
      </ul>
      <a href='yonetim.sair.ekle.php'>Yeni şair ekle...</a>
  </body>
</html>
