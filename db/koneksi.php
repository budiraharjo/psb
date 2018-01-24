<?php
$srvr="localhost"; //SESUAIKAN DENGAN WEBSERVER ANDA
$db="bank_darah"; //SESUAIKAN DENGAN WEBSERVER ANDA
$usr="root"; //SESUAIKAN DENGAN WEBSERVER ANDA
$pwd="";//SESUAIKAN DENGAN WEBSERVER ANDA

mysql_connect($srvr,$usr,$pwd);
mysql_select_db($db);
?>