<?php
  $ID = $_GET["id"];
  $DosyaID = sprintf("%04d", $ID);
  $DosyaAdi = "M$DosyaID.md";
  $SAIR_HAYATI = file_get_contents($DosyaAdi);

  $SayacDosyaAdi = "S$DosyaID.txt";
  if(!file_exists($SayacDosyaAdi)) {
    // Sayaç dosyası yok. İlk değer olarak 0 verelim...
    file_put_contents($SayacDosyaAdi, "0");
  }
  $Sayac=file_get_contents($SayacDosyaAdi);
  $Sayac=intval($Sayac) + 1;
  file_put_contents($SayacDosyaAdi, $Sayac);

  $arrDosya = file($DosyaAdi);
  $SAIR_ADI = $arrDosya[0];
  $SAIR_ADI = substr($SAIR_ADI, 2);

  require_once ('Slimdown.php'); // KAYNAK: https://gist.github.com/jbroadway/2836900
  $SAIR_HAYATI = Slimdown::render($SAIR_HAYATI);

?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title><?=$SAIR_ADI?></title>
    <link rel="stylesheet" href="stil.css">
  </head>
  <body>
    <h1  class="LOGOBASLIK">Türk Şairleri</h1>
    <div class="GERIDONDUGMESI"><a href='index.php'>Ana Sayfa</a></div>
    <div class="HAYATI">
      <?=$SAIR_HAYATI?>
      <hr>
      <p><i>Bu sayfa <?=$Sayac?> defa gösterilmiştir.</i></p>
    </div>
  </body>
</html>
