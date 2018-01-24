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
				<h1 class="titlehead">Sejarah SMK KBM</h1>
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
			<div class="c8">
				<h1 class="maintitle" style="font-size:15px; line-height: 1.5em;">
				</h1>
				<p align="justify">
					<span class="dropcap">M</span>asalah moralitas di kalangan pelajar, dewasa ini merupakan suatu masalah bagi kita semua yang harus mendapat perhatian secara khusus, berbagai perubahan yang terjadi dalam seluruh aspek kehidupan membawa banyak perubahan mulai tata pergaulan, gaya hidup hingga pandangan-pandangan mendasar serta perilaku dalam menghadapi era globalisasi. Arus globalisasi teknologi informasi dan budaya yang tumbuh dan kembang secara cepat menimbulkan dampak tersendiri yang tidak selalu positif bagi kehidupan remaja dan para pelajar, padahal pada sisi elementer mereka di harapkan mampu memelihara dan melestarikan tradisi, cara pandang dan aspek moralitas luhur bangsa Indonesia, maka sangatlah wajar jika pendidikan Nasional tahun 2000 mengamanatkan kepada masyarakat untuk memberlakukan lagi budi pekerti luhur sebagai pelajaran yang wajib di berikan kepada siswa. Disamping itu kita seringkali kecewa, tentang pendidikan agama yang diajarkan dalam pendidikan formal kurang diperhatikan, padahal pendidikan agama inilah yang menjadi sentra atau basic dari segala tingkah laku dalam kehidupan mereka.
<p>Melihat permasalahan tersebut diatas, kami selaku pengurus YAYASAN ATTORIIQO MAHMUUDAN berinisiatif untuk mendirikan lembaga pendidikan formal yang berlandaskan islam yaitu SMK Karya Bakti Mandiri Cisata yang terorganisasi secara sistematis dilingkungan Kampung Cileumpang Desa Cisereh Kecamatan CisataPandeglang. Selain itu melihat kondisi di daerah tersebut yang terpencil jauh dari lembaga pendidikan serta antusiasme masyarakat yang cukup tinggi mendorong kami untuk mendirikan lembaga tersebut, Lebih dari itu kegiatan ini diharapkan mampu menciptakan generasi-generasi yang berkualitas dan berakhlakul karimah demi menghadapi era globalisasi saat ini dan menjadikan insan yang bertaqwa kepada Allah SWT.
Diawali Tahun 2012, sebagai kelas jauh dari SMKS KARYA BAKTI PAGELARAN, Bapak Dede Rohimin, S.Pd.I merintis dan berjuang untuk ikut mencerdaskan bangsa lewat dunia Pendidikan. Berbagai Rintangan dan cobaan, juga tekanan, baik dari keluarga maupun dari Masyarakat sekitar, tak membuatnya lantas berputus asa dan berhenti, Tapi Malah Menjadikannya lebih bersemangat untuk mewujudkan cita-citanya.</p> 
<p>Sehingga Tahun 2014 adalah awal dari buah keberhasilan ... dengan didapatkannya LEGALITAS dari Pemerintah sebagai sebuah SEKOLAH yang mandiri dan resmi.</p>  


				</p>
				
			</div>
			<div class="c4">
				<h1 class="maintitle">
				<span> </span>
				</h1>
				<ul id="skill">
					<li><span class="bar progressdefault" style="width:100%;"></span>
					<h3> </h3>
					</li>
					<li><span class="bar progressdefault" style="width:80%;"></span>
					<h3> </h3>
					</li>
					<li><span class="bar progressdefault" style="width:60%;"></span>
					<h3> </h3>
					</li>
				</ul>
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