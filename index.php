<!DOCTYPE HTML>
<html>
<head> 
<title> SMK KBM </title>
<link rel="icon" href="images/logo.png" type="image/png">
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script> 
</head>
<body>
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="index.php">
			<img src="images/logo.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<?php
		include "menu_head.php";
		?>
	</div>
</div>
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<!-- SLIDER AREA
	================================================== -->
	<div id="da-slider" class="da-slider">
		<!--Slide 1-->
		<div class="da-slide">
			<h2> SMK Karya Bakti Mandiri </h2>
			<p>
				SMK Pasti bissaaaaa
			<a href="#" class="da-link" style="width:202px;">SMK KBM</a>
			<div class="da-img">
				<img src="images/satu.png" alt="">
			</div>
		</div>
		<!--Slide 2-->
		<div class="da-slide">
			<h2>Sekolah Kejuruan</h2>
			<p>
				 Mau cerdas dan kreatif ??? ke SMK KBM Aja
			</p>
			<a href="#" class="da-link" style="width:192px;">SMK KBM</a>
			<div class="da-img">
				<img src="images/dua.png" alt="">
			</div>
		</div>
		<!--Slide 3-->
		<div class="da-slide">
			<h2> Keberadaan SMK Karya Bakti Mandiri</h2>
			<p>
				 Keberadaan SMK akan eksistensinya memberikan insfirasi bagi alumnusnya.
			</p>
			<a href="#" class="da-link" style="width:230px;">SMK KBM</a>
			<div class="da-img">
				<img src="images/tiga.png" alt="">
			</div>
		</div>
		<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
		</nav>
	</div>
</div>
<!-- UNDER SLIDER - BLACK AREA
================================================== -->
<div class="undersliderblack">
	<div class="grid">
		<div class="row space-bot">
			<div class="c12">
				<!--Box 1-->
				<div class="c4 introbox introboxfirst">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-lightbulb"></i>
						</span> Sekolah Menengah Kejuruan Babaunnajah Menes
					</div>
				</div>
				<!--Box 2-->
				<div class="c4 introbox introboxmiddle">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-lightbulb"></i>
						</span> Sekolah Menengah Kejuruan Babaunnajah Menes
					</div>
				</div>
				<!--Box 3-->
				<div class="c4 introbox introboxlast">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-lightbulb"></i>
						</span>
						Sekolah Menengah Kejuruan Babaunnajah Menes  
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shadowunderslider">
</div>


<!-- copyright area -->
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

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
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
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>

<!-- Call opacity on hover images from carousel-->
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
</body>
</html>