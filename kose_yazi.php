<?php require_once("includes/config.php"); ?>
<?php include_once("includes/header.php");?>


<div class="row">
			<?php
					$sorgu="Select * from kose_yazisi";
					$slct=mysql_query($sorgu);
					while($row=mysql_fetch_array($slct)) {
					$yazi=substr(html_entity_decode($row["yazi"], ENT_QUOTES,"UTF-8"), 0, 75);
			?>
		<div class="card disbosluk icbosluk" style="width: 18rem;">
		  	<a href="k_yazi.php?id=<?php echo $row["id"]; ?>"><img src="<?php echo $row["resim"]; ?>" class="card-img-top" alt=""></a>
			  <div class="card-body">
			    <h5 class="card-title"><a class="text-secondary baslik_fontu" href="k_yazi.php?id=<?php echo $row["id"]; ?>"><?php echo substr($row["baslik"],0,30); ?></a></h5>
			    <p class="card-text"><?php echo $yazi; ?></p>
			    <a href="k_yazi.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Devamı...</a>
			  </div>
		</div>
		<?php } ?>
</div>
<?php include_once("includes/footer.php");?>
