<?php require_once("includes/config.php");?>
<?php include("includes/header.php"); ?>

<table class="table table-light table-hover">
  <thead class="table-dark">
    <tr>
      <td>#</td> <td>Şiirin Adı</td> <td>Yazarın Adı Soyadı</td> <td>Yazarın Dönemi</td>  <td>Seslendiren</td> <td> </td>
    </tr>
  </thead>
  <tbody>
    <?php $query=mysql_query("select * from siirler order by adi asc");
          $i=0;
          while ($row=mysql_fetch_array($query)) { $i++; ?>
            <tr>
              <td class="text-primary baslik_fontu"><?php echo $i; ?></td>
              <td><a class="text-secondary baslik_fontu" href="siir_bilgileri.php?id=<?php echo $row["id"]; ?>"><?php echo $row["adi"]; ?></a></td>
              <?php $qu1=mysql_query("select * from yazarlar where id='$row[yazar_id]' ");
                    $rw1=mysql_fetch_array($qu1);
              ?>
              <td><a class="text-secondary baslik_fontu" href="yzr_bilgileri.php?id=<?php echo $rw1["id"]; ?>"><?php echo $rw1["adi"]." ".$rw1["soyadi"]; ?></a></td>
              <td class="text-secondary baslik_fontu">
                <?php
                  $srg=mysql_query("select * from donemler where id='$rw1[donem]'");
                  $str=mysql_fetch_array($srg);
                  echo $str["adi"];
                ?>
              </td>
            <td class="text-secondary baslik_fontu"><?php echo $row["soyleyen"]; ?></td>
              <td class="text-center"><a class="text-secondary baslik_fontu" href="siir_guncelle.php?id=<?php echo $row["id"]; ?>">Güncelle</a><br/><a class="text-secondary" href="siir_sil.php?id=<?php echo $row["id"]; ?>">Sil</a></td>
            </tr>
    <?php } ?>
  </tbody>
</table>
<?php include("includes/footer.php"); ?>
