<?php
    @session_start();
?>
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
            if($_SESSION["GirisYapti"] == 1) {
              echo "<a href='yonetim.sair.duzenle.php?id=$SayfaNo'>Düzenle</a>&nbsp;&nbsp;";
            }
            echo "<a href='sair.php?sair=$SairAdi&id=$SayfaNo'>$SairAdi</a>";
            echo "</li>";
          }
        ?>
      </ul>




      <?php
        if($_SESSION["GirisYapti"] == 1) {
          echo "<p><a href='yonetim.sair.ekle.php'>Yeni şair ekle...</a></p>";;
          echo "<p><a href='oturumu.kapat.php'>Oturumu Kapat</a></p>";;
        } else {
          echo "<p><a href='giris.yap.php'>Giriş Yap</a></p>";
        }

      ?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



  </body>
</html>
