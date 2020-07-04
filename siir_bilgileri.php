<?php require_once("includes/config.php"); ?>
<?php require_once("includes/header.php"); ?>
<?php
  $query=mysql_query("select * from siirler where id='$_GET[id]'");
  $row1=mysql_fetch_array($query);
  $adi=$row1["adi"];
  $yid=$row1["yazar_id"];
  $konum=$row1["siir"];
 ?>
 <?php
   $query=mysql_query("select * from yazarlar where id='$yid'");
   $rows=mysql_fetch_array($query);
   $yadi=$rows["adi"]." ".$rows["soyadi"];
 ?>
 <h1 class="text-primary"><?php echo $adi; ?></h1>
  <h4><a class="text-secondary" href="yzr_bilgileri.php?id=<?php echo $yid; ?>"><?php echo $yadi; ?></a></h4>
  <h5><?php echo $row1["soyleyen"]; ?></h5>
  <audio controls>
    <source src="<?php echo $row1["sarki_knm"];?>" type="audio/mpeg">
  </audio>
<p>
   <?php $satirlar = file($konum);
   foreach ($satirlar as $siir)
   {
     echo $siir."<br>";
   } ?>
</p>


<?php require_once("includes/footer.php"); ?>
