<?php require_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}?>
<?php require_once("includes/header.php"); ?>
<form name="soz" action="soz_eklendi.php" method="post">
  <div class="col-10">
  <input class="form-control" type="text" name="soz" placeholder="Söz">
  </br>
  <input class="form-control" type="text" name="soyleyen" placeholder="Seslendirenin Adı">
  </br>
  <button class="btn btn-outline-primary">KAYDET</button>
  </div>
</form>
<?php require_once("includes/footer.php"); ?>
