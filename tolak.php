<?php
	$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "db_siswa";

$koneksi = mysql_connect ($servername,$user, $pasword)
			or die ('gagal terkoneksi'.mysql_error());
			
$database = mysql_select_db ($db)
			or die ('gagal terhubung ke database'.mysql_error());
      
mysql_connect("localhost", "root", "");
mysql_select_db("db_siswa");

$kdpendaftar= $_GET ['kdpendaftar'];

	mysql_query("update calon_siswa set status_daftar='Ditolak' where no_calon='$kdpendaftar'");
		
if(mysql_query)
		header("location:admin.php");
else
	header("location:admin.php");

?>