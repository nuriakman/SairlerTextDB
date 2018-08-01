<?php

  @session_start();


  if(isset($_POST["kullanici"])) {

    if($_POST["kullanici"] == "admin" and $_POST["parola"] == "123") {
      $_SESSION["GirisYapti"] = 1;
      header("Location: index.php");
      die();
    } else {
      echo "<h1>HATALI GİRİŞ!</h1>";
    }
  }
?>
<!DOCTYPE html>
<html lang="tr" >
  <head>
    <meta charset="utf-8">
    <title>Türk Şairleri Sitesi :: Giriş Sayfası</title>
  </head>
  <body>
  <h1>Lütfen giriş yapınız</h1>
  <form method="post">
    Kullanıcı Adınız:
    <input type="text" name="kullanici" autocomplete="off">
    <br>
    <br>
    Parolanız:
    <input type="password" name="parola" autocomplete="off">
    <br>
    <br>
    <input type="submit" value="Giriş Yap">
  </form>






  </body>
</html>
