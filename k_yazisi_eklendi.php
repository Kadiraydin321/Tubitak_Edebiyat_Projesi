<?php require_once("includes/config.php");?>
<?php
$yazi=htmlentities($_POST["yazi"], ENT_QUOTES, "UTF-8");
if(isset($_FILES["dosya"]["tmp_name"])){
  $gidecegi_konum="files/images/kose_yazisi/";
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
$query="insert into kose_yazisi set
        baslik='$_POST[baslik]',
		yazar='$_POST[yazar]',
        resim='$knm',
        yazi='$yazi'";
        mysql_query($query);
        header("Location: k_yazi_ekle.php");
?>
