<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: login.php");}
$query="Delete from siirler where id='$_GET[id]'";
mysql_query($query);
header("Location: siirler.php");
?>
