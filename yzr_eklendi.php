<?php require_once("includes/config.php");?>
<?php
$dgr_eserler=htmlentities($_POST["dgr_eserler"], ENT_QUOTES, "UTF-8");
$hayati=htmlentities($_POST["hayati"], ENT_QUOTES, "UTF-8");
if(isset($_FILES["dosya"]["tmp_name"])){
  $gidecegi_konum="files/images/yazar/";
  $dosya_adi=$_FILES["dosya"]["name"];
  $dosya_yol=$_FILES["dosya"]["tmp_name"];

  $buay= date("Y-m");
  if(!is_dir($gidecegi_konum.$buay)){
    mkdir($gidecegi_konum.$buay);
    chmod($gidecegi_konum.$buay,0777);
  }
  $uzanti=end(explode(".",$dosya_adi));
  $yeni= substr(md5(microtime()),0,16);
  $knm= $gidecegi_konum.$buay."/".$yeni.".".$uzanti;
  move_uploaded_file($dosya_yol, $knm);
}
if (substr($knm,-1)==".") {
  $knm="";
}
$query="insert into yazarlar set
        adi='$_POST[adi]',
        soyadi='$_POST[soyadi]',
        donem='$_POST[donem]',
        foto_url='$knm',
        dgr_eserler='$dgr_eserler',
        hayati='$hayati'";
        mysql_query($query);
        header("Location: yzr_ekle.php");
?>
