<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}?>
<?php $query=mysql_query("select * from siirler where id='$_GET[id]'");
      $row=mysql_fetch_array($query);
      $adi=$row["adi"];
      $yazar_id=$row["yazar_id"];
?>
<?php include_once("includes/header.php"); ?>
<form name="frm" action="siir_guncellendi.php" method="post" enctype="multipart/form-data">
  <div class="col-10">

      <input class="form-control" type="text" name="adi" value="<?php echo $adi; ?>" placeholder="Şiirin Adı">
      </br>
      <div class="input-group mb-3">
       <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect02">Yazarı:</label>
       </div>
       <select class="form-control" id="exampleFormControlSelect1" name="yazar_id">	<option>Lütfen Seçiniz...</option>
         <?php
          $sorgu=mysql_query("Select * from yazarlar order by adi asc");
              while($row=mysql_fetch_array($sorgu))   {
                  $id=$row['id'];
                  if ($id==$yazar_id) {
                    $slc="selected=\"selected\"";
                  }
                  echo "<option $slc value=$id>$row[adi] $row[soyadi]</option>";
              }
          ?>
      </select>
    </div>

    <input class="form-control" type="text" name="soyleyen" placeholder="Seslendirenin Adı">
    </br>
	<div class="custom-file">
      <input type="file" name="sarki" class="custom-file-input" id="validatedCustomFile">
      <label class="custom-file-label" for="validatedCustomFile">Şarkıyı Seçiniz...</label>
    </div>

    <div class="custom-file">
      <input type="file" name="dosya" class="custom-file-input" id="validatedCustomFile">
      <label class="custom-file-label" for="validatedCustomFile">Şiiri Seçiniz...</label>
      <small id="emailHelp" class="form-text text-muted">Şiiri metin belgesine aktarıp seçiniz.</small>
   </div>
    </br>
    </br>
    <button class="btn btn-outline-primary" >GÜNCELLE</button>

  </div>

</form>
<?php include_once("includes/footer.php"); ?>