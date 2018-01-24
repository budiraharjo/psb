<!DOCTYPE HTML>
<html>
<head> 
<title>SMK KBM</title>
<link rel="icon" href="images/logo.png" type="image/png">
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
</head>
<body>
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="index.html">
				<img src="images/logo.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<?php
		include "menu_head.php";
		?>
			 
</div>
</div>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Registrasi</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Pandeglang</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<?php
$koneksi = mysql_connect("localhost","root","")
or die ("Gagal terhubung ke server MySQL");
mysql_select_db("db_mahasiswa", $koneksi)
or die ("Gagal terhubung ke database");
function no_calon() {
	$sql = "SELECT no_calon FROM calon_siswa ORDER BY no_calon DESC LIMIT 0,1";
	$query = mysql_query($sql);
	list ($no_temp) = mysql_fetch_row($query);
 
	if ($no_temp == '') {
		$calon_siswa = 'C00001';
		
		} else {
		$jum = substr($no_temp,1,6);
		$jum++;
		if($jum <= 9) {
			$calon_siswa = 'C0000' . $jum;
		} elseif ($jum <= 99) {
			$calon_siswa = 'C000' . $jum;
		} elseif ($jum <= 999) {
			$calon_siswa = 'C00' . $jum;
		} elseif ($jum <= 9999) {
			$calon_siswa = 'C0' . $jum;
		} elseif ($jum <= 99999) {
			$calon_siswa = 'C' . $jum; 	
		} else {
			die("Pendaftaran melebih batas");		
		}
	}
		return $calon_siswa;
}
 
$no_calon = no_calon();
 
?>
<div class="grid">
		
		<div class="row space-top">
			<!-- CONTACT FORM -->
			
			<div class="c6 space-top">
				<h1 class="maintitle">
				<span><i class="icon-book"></i> Silahkan Daftar </span>
				</h1>
				<div class="wrapcontact">
					 
				<form method="POST" action="contact_query.php" onsubmit="return validasi(this)" >
						<div class="form">
							<div class="c12 noleftmargin">
								<label>No</label>
								<input type="text" name="no_calon" value="<?php echo $no_calon; ?>" readonly style="width:80px;">
							</div>
							<div class="c12 noleftmargin">
								<label>Nama</label>
								<input type="text" name="nm_calon">
							</div>
							<div class="c12 noleftmargin">
								<label>Alamat</label>
								<textarea type="text" name="alamat" ></textarea>
							</div>
							<div class="c12 noleftmargin">
								<label>Tempat Lahir</label>
								<input type="text" name="tmpt_lhr">
							</div>
							<div class="c12 noleftmargin">
								<label>Tgl Lahir</label>
							<tr>
							<div class="c2 noleftmargin">
							<select name="tgla" style="width:120px;">
							<option selected="selected" class="form-control">Tanggal</option>
							<?php
							for($a=1; $a<=31; $a+=1){
								echo"<option value=$a> $a </option>";
							}
							?>
							</select>
							</div>
							
							<div class="c4 noleftmargin">
							<select name="blna" style="width:200px;">
							<option selected="selected" >Bulan</option>
							<option value="01"> Januari </option>
							<option value="02"> Februari </option>
							<option value="03"> Maret </option>
							<option value="04"> April </option>
							<option value="05"> Mei </option>
							<option value="06"> Juni </option>
							<option value="07"> Juli </option>
							<option value="08"> Agustus </option>
							<option value="09"> September </option>
							<option value="10"> Oktober </option>
							<option value="11"> November </option>
							<option value="12"> Desember </option>
							
							</select>
							</div>
							
							<div class="c4 noleftmargin">
							<select name="thna" style="width:80px;">
							<option selected="selected">Tahun</option>
							<?php
							for($i=2013; $i>=1905; $i-=1){
							echo"<option value=$i> $i </option>";
							}
							?>
							</select></td> 
							</div>
							</div>
							
							<div class="c12 noleftmargin">
								<select name="jk" required>
									<option value="">Jenis Kelamin</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="c12 noleftmargin">
								<select name="wn" required>
								<option value="">Warga Negara</option>
								<option value="WNI">WNI</option>
								<option value="WNA">WNA</option>
								</select>
							</div>
							<div class="c12 noleftmargin">
								<label>Agama</label>
								<input type="text" name="agama">
							</div>
							
							
							
							
				</div>
				</div>
			</div>
			<div class="c6 space-top">
				<h1 class="maintitle">
				<span><i class="icon-user"></i>   </span>
				</h1>
				<div class="wrapcontact">
							
							<div class="c12 noleftmargin">
								<label>No Ijazah</label>
								<input type="text" name="ijazah">
							</div>
							<div class="c12 noleftmargin">
								<label>Tahun Lulus</label>
								<input type="text" name="thn_tamat">
							</div>
							<div class="c12 noleftmargin">
								<label>Asal Sekolah</label>
								<input type="text" name="asl_sklh">
							</div>
							<div class="c12 noleftmargin">
								<label>Jurusan</label>
								<select name="kd_jur" required>
								<option value="">Jurusan</option>
								
								<?php
								$sql = "SELECT * FROM jurusan";
								$query = mysql_query($sql);
								while ($data = mysql_fetch_array($query)) {
								echo "<option value='$data[kd_jur]'>$data[nm_jur]</option>";
								}	
								?>
								</select>
								
							</div>
							<div class="c12 noleftmargin">
								<label>Ruang</label>
								<input type="text" name="kd_kls">
							</div>
							<div class="c12 noleftmargin">
								<label>Nama Ortu</label>
								<input type="text" name="nm_ortu">
							</div>
							<div class="c12 noleftmargin">
								<label>Pekerjaan</label>
								<input type="text" name="pekerjaan_ortu">
							</div>
				
				
				<input type="submit" name="register" class="button" style="font-size:12px;" value="Daftar">
							<input type="reset" name="reset" class="button" style="font-size:12px;" value="Reset">
						</div>
					</form>
			</div>
			
		</div>
		</br>
			</br>
			</br>
			</br>
			</br>
			</br>
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
<?php
include "footer.php";
?>

</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- contact form -->
<script src="js/contact.js"></script>

</body>
</html>