<?php  session_start();

      //  Bağlantı Bilgileri -- Connect info
        $host="localhost";
        $username="root";
        $pass="";
        $database="nmb_db";
      //  Bağlantı -- Connect
        $conn=mysql_connect($host,$username,$pass);
        mysql_select_db($database,$conn);
        mysql_query("SET NAMES 'utf8'");
		mysql_query("SET CHARACTER SET utf8");
		mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
?>
