<?php 

session_start();
session_destroy();
echo '<script language="javascript">alert("Anda berhasil logout !"); document.location="index.php";</script>';
 

?>