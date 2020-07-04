<?php require_once("includes/config.php");?>
<?php
if(isset($_FILES["sarki"]["tmp_name"])){
  $gidecegi_konum="files/text/muzik/";
  $dosya_adi=$_FILES["sarki"]["name"];
  $dosya_yol=$_FILES["sarki"]["tmp_name"];

  $uzanti=end(explode(".",$dosya_adi));
  $yeni= substr(md5(microtime()),0,16);
  $sarki_knm= $gidecegi_konum.$yeni.".".$uzanti;
  move_uploaded_file($dosya_yol, $sarki_knm);
}
  if(isset($_FILES["dosya"]["tmp_name"])){
    $gidecegi_konum="files/text/siir/";
    $dosya_adi=$_FILES["dosya"]["name"];
    $dosya_yol=$_FILES["dosya"]["tmp_name"];

    $uzanti=end(explode(".",$dosya_adi));
    $yeni= substr(md5(microtime()),0,16);
    $knm= $gidecegi_konum.$yeni.".".$uzanti;
    move_uploaded_file($dosya_yol, $knm);
  }

  $query="insert into siirler set
          yazar_id ='$_POST[yazar_id]',
          adi='$_POST[adi]',
          siir='$knm',
          soyleyen='$_POST[soyleyen]',
      		sarki_knm='$sarki_knm'";

  mysql_query($query);
  header("Location: siir_ekle.php");
?>
