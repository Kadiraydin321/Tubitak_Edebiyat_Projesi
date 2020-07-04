<?php require_once("includes/config.php"); ?>
<?php

    $query="insert into sozler set
            soyleyen ='$_POST[soyleyen]',
            soz='$_POST[soz]' ";

    mysql_query($query);
    header("Location: soz_ekle.php");
 ?>
