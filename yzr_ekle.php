<?php require_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}?>
<?php include_once("includes/header.php"); ?>
<form name="frm" action="yzr_eklendi.php" method="post" enctype="multipart/form-data">
  <div class="col-10">
    <input class="form-control" type="text" name="adi" placeholder="ADI">
    <br/>
    <input class="form-control" type="text" name="soyadi" placeholder="SOYADI">
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
          <option value="<?php echo $rw["id"];?>"><?php echo $rw["adi"];?></option>
				<?php } ?>
        </select>
      </div>
    <div class="custom-file">
      <input type="file" name="dosya" class="custom-file-input" id="validatedCustomFile">
      <label class="custom-file-label" for="validatedCustomFile">Fotoğraf Seçin...</label>
   </div>
   <br/><br/>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="dgr_eserler" placeholder="DİĞER ESERLERİ" rows="4"></textarea>
    <br/>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="hayati" placeholder="HAYATI" rows="4"></textarea>
    <br/>
    <button class="btn btn-outline-primary" >KAYDET</button>
  </div>
 </form>
<?php include_once("includes/footer.php"); ?>
