<?php require_once("includes/config.php");?>
<?php include("includes/header.php"); ?>

<div class="col-12 text-center">
<form name="misradan_ezgiye" action="#" method="post" >
	<input type="text" name="ara" class="form-control"/></br>
	<button type="submit" class="btn btn-outline-primary btn-lg">Ara</button>
</form>
</div>


<div class="row text-left">
	<?php
		if(isset($_POST["ara"])){$dgr=$_POST["ara"];

		$query="Select * from misradan_ezgiye where adi COLLATE UTF8_GENERAL_CI like '$dgr%' or sair COLLATE UTF8_GENERAL_CI like '%$dgr' or soyleyen COLLATE UTF8_GENERAL_CI like '%$dgr'";
		$sorgu=mysql_query($query);
		$row=mysql_fetch_array($sorgu);
	?>
  <div class="col-6">

	<p class="text-left">
	<?php
		$satirlar = file(dirname(__FILE__)."/".$row["soz_knm"]);
		foreach ($satirlar as $siir)
		{
			echo $siir."<br>";
		}
	?>
  </p>
  </div>
  <div class="col-6 text-center">
		<p class="baslik_fontu"><?php echo $row["adi"]." - ".$row["soyleyen"];?></p>
		<p class="baslik_fontu"><?php echo "Şair: ".$row["sair"];?></p>
		<p>
			<audio controls>
			  <source src="<?php echo $row["sarki_knm"];?>" type="audio/mpeg">
			</audio>
		</p>
  </div>
		<?php } ?>
</div>


<?php include("includes/footer.php"); ?>
