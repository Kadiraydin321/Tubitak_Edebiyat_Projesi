<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}?>
<?php include_once("includes/header.php"); ?>
<form name="frm" action="haber_eklendi.php" method="post" enctype="multipart/form-data">
  <div class="col-10">

    <input class="form-control" type="text" name="baslik" placeholder="Haberin Başlığı">
    </br>
    <div class="custom-file">
        <input type="file" name="dosya" class="custom-file-input" id="validatedCustomFile">
        <label class="custom-file-label" for="validatedCustomFile">Fotoğraf Seçin...</label>
    </div>
    </br>
    </br>
    <textarea class="form-control" name="icerik" placeholder="Haberin İçeriği" rows="7"></textarea>
    </br>
    <button class="btn btn-outline-primary" >KAYDET</button>

  </div>

</form>
<?php include_once("includes/footer.php"); ?>
