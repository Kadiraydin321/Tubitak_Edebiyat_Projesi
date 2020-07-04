<?php require_once("includes/config.php");?>
<?php require_once("includes/header.php");?>
<?php
  $query=mysql_query("Select * from haber where id='$_GET[id]'");
  $row=mysql_fetch_array($query);
  $id=$_GET["id"];
  $baslik=$row["baslik"];
  $resim=$row["resim"];
  $icerik=html_entity_decode($row["icerik"], ENT_QUOTES,"UTF-8");
?>
<div class="col-12 text-center">
  <img src="<?php echo $resim;?>" class="img-fluid" alt="1">
</div>
<br/>
<div class="col-12 text-center">
  <h2 class="baslik_fontu"><?php echo $baslik;?><h2/>
</div>
<br/>
<div class="col-12">
  <p class="text-left"><?php echo $icerik; ?></p>
</div>
<?php require_once("includes/footer.php");?>
