<?php require_once("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php
			$i=0;
				$sorgu="Select * from yazarlar order by donem asc";
				$slct=mysql_query($sorgu);
					while($row=mysql_fetch_array($slct))
					{
						$srg=mysql_query("select * from donemler where id='$row[donem]'");
						$str=mysql_fetch_array($srg);
						$i++;
						$hayati=substr(html_entity_decode($row["hayati"], ENT_QUOTES,"UTF-8"), 0, 250)."<a href=yzr_bilgileri.php?id=$row[id]><font class=\"text-primary\">[...]</font></a>";
            echo "<div class=\"card col\" style=\"max-width: 610px;\">";
              echo "<div class=\"row no-gutters\">";
                  echo "<div class=\"col-4 text-middle\">";

                  echo "<a href=\"yzr_bilgileri.php?id=$row[id]\"><img src=".$row["foto_url"]." class=\"card-img img-fluid\" alt=".$i."/></a>";
                   echo "</div>";
                echo "<div class=\"col-8\">";
                  echo "<div class=\"card-body\">";

        							echo "<h5 class=\"card-title text-primary baslik_fontu\">".$i.".<a class=\"text-primary\" href=yzr_bilgileri.php?id=$row[id]>$row[adi] $row[soyadi]</a></h5>";
											echo "<h5 class=\"card-title text-secondary baslik_fontu\">$str[adi]</h5>";
											echo "<p class=\"card-text\">$hayati</p>";
											echo "<a class=\"btn btn-outline-secondary\" href=\"yzr_guncelle.php?id=$row[id]\">Güncelle</a>";
											echo "<a class=\"btn btn-outline-secondary\" href=\"yzr_sil.php?id=$row[id]\">Sil</a>";
                echo "</div>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
						echo "<br/>";
					}
			?>
<?php include("includes/footer.php"); ?>
