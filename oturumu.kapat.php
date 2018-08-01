<?php
  @session_start();
  $_SESSION["GirisYapti"] = 0;
  header("Location: index.php");
  die();
