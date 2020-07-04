<?php require_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}?>
<?php
     mysql_query("delete from yazarlar where id='$_GET[id]'");
     mysql_query("delete from siirler where yazar_id='$_GET[id]'");
     header("Location: yazarlar.php");
 ?>
