<?php require_once("includes/config.php"); ?>
<?php require_once("includes/header.php"); ?>
<form name="login" method="post" action="kontrol.php">
  <div class="col-10">
    <input class="form-control" type="text" name="k_adi" placeholder="Kullanıcı Adı">
    <br/>
    <input class="form-control" type="password" name="sifre" placeholder="Şifre">
    <br/>
    <button class="btn btn-outline-primary" >Giriş</button>
  </div>
</form>
<?php require_once("includes/footer.php"); ?>
