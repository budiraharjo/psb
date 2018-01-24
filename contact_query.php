<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <style>

/* CSS */
#wrapper{
width: 850px; /* Ini lebar Template secara keseluruhan */
margin: auto; /* Ini untuk membuat "CENTER" blog pada Browser */
}
.header{
height: 100px; /* Ini Untuk mengatur tinggi di header */
background-color:white; /* Ini Untuk mengatur warna background pada header*/
margin: 10px 10px 1px 10px;
padding: 10px;
border: white; /* Border untuk mengatur ketebalan garis tepi dan #000000 adalah warna untuk garis tepi*/
}
.bagian-post{
float: left; /* Ini Untuk memposisikan Widget di kiri */
width: 600px; /* Ini Untuk mengatur lebar kotak postingan*/
height:400px;
margin: 0 20px 1px 0;
padding: 10px;
background-color: #ffffff;
border: white;
}

.garis{
float: left; /* Ini Untuk memposisikan Widget di kiri */
width: 700px; /* Ini Untuk mengatur lebar kotak postingan*/
background-color: #ffffff;
border: 2px solid #000000;
}

#nomer_surat{
	text-align:center;
}
.nama_surat{
	text-transform:uppercase;
	text-decoration:underline;
	font-weight:bolder;	
}
#surat{
	padding:10px;
	border:1px solid green;
	min-width:300px;
	min-height:400px;
	overflow:auto;
}
#surat div{
	margin:4px;	
}
#par_pembuka{
	text-align:justify;	
}
#content_surat{
	position:auto;
//	border:1px solid red;
	overflow:auto;
	padding-left:30px;
	min-height:300px;
	}
#content_surat div{
	position:relative;
	padding:1px;
	}	
label.l_form{
//	display: inline-block;
}
.isian_surat{
	position:absolute;
	left:170px;
	width:auto;
}	
</style>


	

 <head>

</head>


 <body background="white">
<div id='wrapper'>


<!-- bagian kepala/ header nya -->

<div class='header'>
<table width="380" border="0" rowspan="2">
<tr>
<th width="10" rowspan="4" ><img src="images/logo.png" width="70px" height="70px" id="logo_surat" valign="baseline"/></th>
</tr>
</th>
<tr>
<td height="0.050" align="center"><strong>KARTU TANDA PENDAFTARAN</strong></td>
</tr>
<tr>
<td height="0.05" align="center"><strong>SMK KARYA BAKTI MANDIRI</strong></td>
</tr>
<tr>
<td height="0.05" align="center">PANDEGLANG BANTEN</td>
</tr>
</table>
======================================================
</div>

<table rowspan="3" width="480" border="0">
<td>
<div align="center">
KARTU BUKTI PENDAFTARAN
</div>
</table>

<?php
session_start();
include ('db.php');

if(isset($_POST['register'])) {

$no_calon = $_POST['no_calon'];

$nm_calon = $_POST['nm_calon'];
$alamat = $_POST['alamat'];

$tmpt_lhr = $_POST['tmpt_lhr'];
$jk = $_POST['jk'];
$wn = $_POST['wn'];
$agama = $_POST['agama'];

$tgla = $_POST['tgla'];
$blna = $_POST['blna'];
$thna = $_POST['thna'];

$tgl_lhr = $thna."-".$blna."-".$tgla;

$ijazah = $_POST['ijazah'];
$thn_tamat = $_POST['thn_tamat'];

$asl_sklh = $_POST['asl_sklh'];
$kd_jur = $_POST['kd_jur'];
$kd_kls = $_POST['kd_kls'];
$nm_ortu = $_POST['nm_ortu'];
$pekerjaan_ortu = $_POST['pekerjaan_ortu'];
$status_daftar ="Daftar";

$query_trapper = $conn->prepare('SELECT * FROM calon_siswa WHERE nm_calon = ?');
$query_trapper->execute(array($nm_calon));
$trapper = $query_trapper->rowCount();

if ($trapper > 0) {
	echo "<script>alert('Nomror alredy used!'); window.location='index.php'</script>";
	echo "<script>javascript:self-history.back() </script>;";
}else {

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$insert_query = "INSERT INTO calon_siswa (no_calon, nm_calon, alamat, tmpt_lhr, tgl_lhr, jk, wn, agama, ijazah, thn_tamat, asl_sklh, kd_jur, kd_kls, nm_ortu, pekerjaan_ortu, status_daftar)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$insert = $conn->prepare($insert_query);
$insert->execute(array($no_calon, $nm_calon, $alamat, $tmpt_lhr, $tgl_lhr, $jk, $wn, $agama, $ijazah, $thn_tamat, $asl_sklh, $kd_jur, $kd_kls, $nm_ortu, $pekerjaan_ortu, $status_daftar));

if($insert_query){
?>
<?php 
			echo "<table class='table'>
					<br>
				  <tr>
					<td></td>
					<td>Nama</td >
					<td width='80' height='2'></td>
					<td>: $nm_calon</td>		
				  </tr>
				  <tr>
					<td></td>
					<td>Alamat</td >
					<td width='80' height='2'></td>
					<td>: $alamat</td>		
				  </tr>
				  <tr>
					<td></td>
					<td>No</td >
					<td width='80' height='2'></td>
					<td>: $no_calon</td>		
				  </tr>
				  <tr>
					<td></td>
					<td>Ruangan</td >
					<td width='80' height='2'></td>
					<td>: $kd_kls</td>		
				  </tr>
				  			
				
		</table>" 
		?>
			</script><?php
		}else{
			echo "Gagal Insert Data".mysql_error();
		}
	
}
}
?>

<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>

<script>alert("Data berhasil disimpan"); document.location="index.php";</script>

	