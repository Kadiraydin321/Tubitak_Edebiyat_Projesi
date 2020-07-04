<?php require_once("includes/config.php");?>
<?php

  if(isset($_FILES["sarki"]["tmp_name"])){
    $gidecegi_konum="files/sarki/muzik/";
    $dosya_adi=$_FILES["sarki"]["name"];
    $dosya_yol=$_FILES["sarki"]["tmp_name"];

    $uzanti=end(explode(".",$dosya_adi));
    $yeni= substr(md5(microtime()),0,16);
    $sarki_knm= $gidecegi_konum.$yeni.".".$uzanti;
    move_uploaded_file($dosya_yol, $sarki_knm);
  }
  if(isset($_FILES["soz"]["tmp_name"])){
    $gidecegi_konum="files/sarki/sozler/";
    $dosya_adi=$_FILES["soz"]["name"];
    $dosya_yol=$_FILES["soz"]["tmp_name"];

    $uzanti=end(explode(".",$dosya_adi));
    $yeni= substr(md5(microtime()),0,16);
    $soz_knm= $gidecegi_konum.$yeni.".".$uzanti;
    move_uploaded_file($dosya_yol, $soz_knm);
  }

  $query="insert into misradan_ezgiye set
		adi='$_POST[adi]',
        sair='$_POST[sair]',
		soyleyen='$_POST[soyleyen]',
		soz_knm='$soz_knm',
		sarki_knm='$sarki_knm'";

  mysql_query($query);
  header("Location: sarki_ekle.php");
?>
