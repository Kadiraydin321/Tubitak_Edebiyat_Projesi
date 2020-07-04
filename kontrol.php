<?php require_once("includes/config.php"); ?>
<?php

    $k_adi=$_POST["k_adi"];
    $sifre=$_POST["sifre"];

    $query="select * from kullanici where k_adi='$k_adi' and sifre='$sifre'";

    $sorgu=mysql_query($query);

    if (mysql_num_rows($sorgu)!=0) {
      $_SESSION["admin"]=$k_adi;
      header("Location: anasayfa.php");
    }
    else if(mysql_num_rows($sorgu)==0) {
      header("Location: login.php");
    }

 ?>
