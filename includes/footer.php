</div>

	<div class="col-3">
		<p>
			<?php
						$qr=mysql_query("select * from siirler");
						$str_say=mysql_num_rows($qr);
						$rnd=mt_rand(1,$str_say);
						$query=mysql_query("select * from siirler where id='$rnd'");
						$row=mysql_fetch_array($query);
						echo "<h3><a class=\"text-primary baslik_fontu\" href=\"siir_bilgileri.php?id=".$row["id"]."\">".$row["adi"]."</a></h3>";
						$q1=mysql_query("select * from yazarlar where id='$row[yazar_id]'");
						$r1=mysql_fetch_array($q1);
						echo "<h5><a class=\"text-muted baslik_fontu\" href=\"yzr_bilgileri.php?id=".$r1["id"]."\">".$r1["adi"]." ".$r1["soyadi"]."</a></h5>";
						$satirlar = file($row["siir"]);
						foreach ($satirlar as $siir)
						{
							echo $siir."<br>";
						}
			?>
	</p>
	</div>

</div>
    	</div>
    <div class="container">©Copyright 2019 Nostaljiye Modern Bakis. Tüm Haklari Saklidir.</div>
  </body>
</html>
