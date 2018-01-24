<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>SMK KBM </title>
<link rel="icon" href="images/logo.png" type="image/png">
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts are at the bottom of the document -->
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
				<h1 class="titlehead">Daftar Calon Siswa SMK KBM</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Pandeglang</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row">
			<div class="c12">
				<h1 class="maintitle" style="font-size:15px; line-height: 1.5em;">
			 
				</h1>
				<p align="justify">
					<table class="table">
						<thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Jurusan</center></th>
                                    <th><center>Asal Sekolah</center></th>
                                    <th><center>Alamat</center></th>
                                    <th><center>Ijazah</center></th>
                                    <th><center>TTL</center></th>
                                    <th><center>Status Daftar</center></th>
                                </tr>
                            </thead>
							<?php 
							$servername = "localhost";
							$user		= "root";
							$pasword	= "";
							$db			= "db_siswa";

							$koneksi = mysql_connect ($servername,$user, $pasword)
							or die ('gagal terkoneksi'.mysql_error());
							$database = mysql_select_db ($db)
							or die ('gagal terhubung ke database'.mysql_error());
							$query_mysql = mysql_query("SELECT * FROM calon_siswa")or die(mysql_error());
							$query_mysql = mysql_query("SELECT * FROM calon_siswa INNER JOIN jurusan ON calon_siswa.kd_jur = jurusan.kd_jur ");
							if(mysql_num_rows($query_mysql) == 0){	
							echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
							}else{
							$nomor = 1;
							while($data = mysql_fetch_array($query_mysql)){ 
							?>
                            <tbody>
                                <tr>
                                    <td class="align-center"><?php echo $nomor++; ?></td>
                                    <td><?php echo $data['nm_calon']; ?></td>
                                    <td><?php echo $data['nm_jur']; ?></td>
                                    <td><?php echo $data['asl_sklh']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
									<td><?php echo $data['ijazah']; ?></td>
									<td><?php echo $data['tmpt_lhr']; ?>, <?php echo $data['tgl_lhr']; ?></td>
                                    <td><?php echo $data['status_daftar']; ?></a></td> 
								</tr>
                               
                            </tbody>
							<?php } } ?>
                        </table>

				</p>
				
			</div>
		</div>
		
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
<!-- all-->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- testimonial rotator -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- CALL Showcase - change 5 from min:5 and max:5 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 5,
						max: 5
					}
				}
			});
		});	
</script>

<!-- CALL opacity on hover images -->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>

<!-- CALL tabs -->
<script type="text/javascript">
$(document).ready(function() {	
	$('#tabs li a:not(:first)').addClass('inactive');
	$('.container:not(:first)').hide();	
	$('#tabs li a').click(function(){		
		var t = $(this).attr('href');
		if($(this).hasClass('inactive')){ //added to not animate when active
			$('#tabs li a').addClass('inactive');		
			$(this).removeClass('inactive');
			$('.container').hide();
			$(t).fadeIn('slow');	
		}			
		return false;
	}) //end click
});
</script>
</body>
</html>