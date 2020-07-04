<?php require_once("includes/config.php");?>
<?php require_once("includes/header.php");?>
<?php
  $query=mysql_query("Select * from yazarlar where id='$_GET[id]'");
  $row=mysql_fetch_array($query);
  $id=$_GET["id"];
  $adi=$row["adi"];
  $soyadi=$row["soyadi"];
  $donem=$row["donem"];
  $foto_url=$row["foto_url"];
  $dgr_eserler=html_entity_decode($row["dgr_eserler"], ENT_QUOTES,"UTF-8");
  $hayati=html_entity_decode($row["hayati"], ENT_QUOTES,"UTF-8");
  
  
  $query1=mysql_query("Select * from donemler where id='$donem'");
  $row1=mysql_fetch_array($query1);
?>
<div class="col-12 text-center">
  <h2><?php echo $adi." ".$soyadi;?><h2/>
</div>
<div class="col-12 text-center">
  <h1><?php echo $row1["adi"];; ?></h1>
  <br/>
</div>
<div class="col-12 text-center">
  <img src="<?php echo $foto_url;?>" alt="1">
  <br/>
</div>
    <div class="col-12">
      <?php if (!is_null($dgr_eserler)) {?>
      <p><h4>Diğer Eserleri:</h4></p>
      <p class="text-center"><?php echo $dgr_eserler; ?></p>
    <?php } ?>
    </div>
<div class="col-12">
  <p><h4>Hayatı:</h4></p>
  <p class="text-center"><?php echo $hayati; ?></p>
</div>
<?php require_once("includes/footer.php");?>
