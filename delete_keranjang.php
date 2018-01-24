<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bank_darah",$conn);
$rowCount = count($_POST["id_keranjang"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM keranjang WHERE id_keranjang='" . $_POST["id_keranjang"][$i] . "'");
}
header("Location:distributor.php");
?>