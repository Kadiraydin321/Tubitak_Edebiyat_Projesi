<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nostaljiye Modern Bakış</title>
<style>
    .baslik_fontu{
      font-family: "Times New Roman", Times, serif;
    }
    .duz_yazi_fontu{

    }

    div.disbosluk {
  margin-top: 15px;
  margin-right: 40px;
  margin-left: 40px;
  margin-bottom: 15px;
}
  div.icbosluk{
    padding: 8px;
  }
</style>

  </head>
  <body class="bg-light">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <div class="container-fluid">

          <div class="row">

            <div class="col"></div>
            <div class="col-7">
                <div class="text-center">
                  <?php
            						$qr=mysql_query("select * from sozler");
            						$str_say=mysql_num_rows($qr);
            						$rnd=mt_rand(1,$str_say);
            						$query=mysql_query("select * from sozler where id='$rnd'");
            						$row=mysql_fetch_array($query);
            						echo $row["soz"];
                        echo "<h4 class=\"baslik_fontu\">".$row["soyleyen"]."</h4>";
            			?>
                </div>
              </div>

            <div class="col-3 text-center">
                <a href="anasayfa.php"><img width="125" height="100" src="Logo.png" alt="logo" /></a>
              </div>
          </div>
          <?php $lnk=$_SERVER['SCRIPT_NAME'];?>
          <div class="row">
              <div class="col-2">
                <div class="pos-f-t">
                      <div class="collapse" id="navbarToggleExternalContent">
                         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/anasayfa.php"){echo "active";} ?>" href="anasayfa.php" role="tab" aria-selected="true">Ana Sayfa</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/yazarlar.php"){echo "active";} ?>" href="yazarlar.php" role="tab" aria-selected="false">Yazarlar - Şairler</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/siirler.php"){echo "active";} ?>" href="siirler.php" role="tab" aria-selected="false">Şiirler</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/misradan_ezgiye.php"){echo "active";} ?>" href="misradan_ezgiye.php" role="tab" aria-selected="false">Mısradan Ezgiye</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/kose_yazi.php"){echo "active";} ?>" href="kose_yazi.php" role="tab" aria-selected="false">Köşe Yazıları</a>
							<?php if (!isset($_SESSION["admin"])){ ?>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/login.php"){echo "active";} ?>" href="login.php" role="tab" aria-selected="false">Giriş</a>
                            <?php } else { ?>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/cikis.php"){echo "active";} ?>" href="cikis.php" role="tab" aria-selected="false">Çıkış</a>
                            <?php } ?>
                            <?php if(isset($_SESSION["admin"])){ ?>
                            <div class="dropdown-divider"></div>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/yzr_ekle.php"){echo "active";} ?>" href="yzr_ekle.php" role="tab" aria-selected="false">Yazar Ekle</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/siir_ekle.php"){echo "active";} ?>" href="siir_ekle.php" role="tab" aria-selected="false">Şiir Ekle</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/soz_ekle.php"){echo "active";} ?>" href="soz_ekle.php" role="tab" aria-selected="false">Söz Ekle</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/sarki_ekle.php"){echo "active";} ?>" href="sarki_ekle.php" role="tab" aria-selected="false">Şarkı Ekle</a>
                            <a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/haber_ekle.php"){echo "active";} ?>" href="haber_ekle.php" role="tab" aria-selected="false">Haber Ekle</a>
							<a class="nav-link <?php if($lnk=="/nostaljiye_modern_bakis/k_yazi_ekle.php"){echo "active";} ?>" href="k_yazi_ekle.php" role="tab" aria-selected="false">Köşe Yazısı Ekle</a>

                          <?php }?>
                          </div>
                        </div>
                        <nav class="navbar navbar-light bg-light">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="flase" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                        </nav>
                </div>
              </div>
              <div class="col-7">
