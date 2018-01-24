<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bank_darah",$conn);
if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["id_distributor"]);
for($i=0;$i<$usersCount;$i++) {

$result = mysql_query("SELECT * FROM darah WHERE id_darah='".$_POST["id_darah"][$i]."' ");
$row[$i]= mysql_fetch_array($result);
											
mysql_query("UPDATE keranjang set id_distributor='" . $_POST["id_distributor"][$i] . "', id_darah='" . $_POST["id_darah"][$i] . "', banyaknya='" . $_POST["banyaknya"][$i] . "', total='".$_POST["banyaknya"][$i] * $row[$i]["harga"]."' WHERE id_keranjang='" . $_POST["id_keranjang"][$i] . "'");
}
header("Location:distributor.php?page=penjualan&act=selesai_memilih");
}
?>