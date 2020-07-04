<?php require_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}?>
<?php $query=mysql_query("select * from yazarlar where id='$_GET[id]'");
      $row=mysql_fetch_array($query);
      $adi=$row["adi"];
      $soyadi=$row["soyadi"];
      $donem=$row["donem"];
      $dgr_eserler=html_entity_decode($row["dgr_eserler"], ENT_QUOTES,"UTF-8");
      $hayati=html_entity_decode($row["hayati"], ENT_QUOTES,"UTF-8");
?>
<?php include_once("includes/header.php"); ?>
<form name="frm" action="yzr_guncellendi.php?id=<?php echo $_GET["id"]; ?>" method="post" enctype="multipart/form-data">
  <div class="col-10">
    <input class="form-control" type="text" value="<?php echo $adi;?>" name="adi" placeholder="ADI">
    <br/>
    <input class="form-control" type="text" value="<?php echo $soyadi;?>" name="soyadi" placeholder="SOYADI">
    <br/>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Yazar Dönemi...</label>
        </div>
		<select class="custom-select" name="donem" id="inputGroupSelect01">
          <option selected>Seçin...</option>
		  <?php 
				$qr=mysql_query("select * from donemler"); 
				while($rw=mysql_fetch_array($qr)){
		  ?>
          <option <?php if ($donem==$rw["id"]) {echo "selected=\"selected\"";} ?> value="<?php echo $rw["id"];?>"><?php echo $rw["adi"];?></option>
				<?php } ?>
        </select>
      </div>
    <div class="custom-file">
      <input type="file" name="dosya" class="custom-file-input" id="validatedCustomFile">
      <label class="custom-file-label" for="validatedCustomFile">Fotoğraf Seçin...</label>
   </div>
   <br/><br/>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="dgr_eserler" placeholder="DİĞER ESERLERİ" rows="4"><?php echo $dgr_eserler;?></textarea>
    <br/>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="hayati" placeholder="HAYATI" rows="4"><?php echo $hayati;?></textarea>
    <br/>
    <button class="btn btn-outline-primary" >GÜNCELLE</button>
  </div>
 </form>
<?php include_once("includes/footer.php"); ?>
