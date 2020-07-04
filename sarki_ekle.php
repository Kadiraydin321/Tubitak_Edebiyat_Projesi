<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}?>
<?php include_once("includes/header.php"); ?>
<form name="frm" action="sarki_eklendi.php" method="post" enctype="multipart/form-data">
  <div class="col-10">

    <input class="form-control" type="text" name="adi" placeholder="Şarkının Adı">
    </br>
    <input class="form-control" type="text" name="sair" placeholder="Şairin Adı">
    </br>
    <input class="form-control" type="text" name="soyleyen" placeholder="Söyleyenin Adı">
    </br>
	<div class="custom-file">
      <input type="file" name="sarki" class="custom-file-input" id="validatedCustomFile">
      <label class="custom-file-label" for="validatedCustomFile">Şarkıyı Seçiniz...</label>
    </div>
    </br>
    </br>
    <div class="custom-file">
      <input type="file" name="soz" class="custom-file-input" id="validatedCustomFile">
      <label class="custom-file-label" for="validatedCustomFile">Sözleri Seçiniz...</label>
   </div>
    </br>
    </br>
    <button class="btn btn-outline-primary" >KAYDET</button>

  </div>

</form>
<?php include_once("includes/footer.php"); ?>
