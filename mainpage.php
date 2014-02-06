<!DOCTYPE html>

<html>
	<title>ICGC Devotional</title>
	<head>

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
		<!-- <script type="text/javascript" src="http://216.224.161.207/icgc/script.js"></script> -->

		<link rel="stylesheet" href="css/style.css" />
		<!-- <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.2.0.min.js"></script> -->

		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="script.js"></script>

		<link rel="stylesheet"  href="css/jquery.mobile-1.3.2.min.css">
		<link rel="stylesheet" href="css/jqm-demos.css">
		<link rel="shortcut icon" href="favicon.ico">
		<!--
		<script>
		function updateIndicator() {
		document.getElementById('indicator').textContent = navigator.onLine ? '' : 'offline';
		alert
		}
		</script> -->
	</head>
	<body onload="updateIndicator()" ononline="updateIndicator()" onoffline="updateIndicator()">
		<div id='page' data-role='page'  data-dom-cache="true">

			<div id='header' data-role='header' >
				<div class="div_header">
					ICGC Daily Devotional
					<p>
						<span id="indicator"></span>
					</p>
				</div>

				<div class="wrapper1">
					<a href="mainpage.php" data-transition='flip'rel="external" class="span_menu" style="color: black; border-left: 1px solid gray;"><img src="icons/home.png" />
					<br/>
					HOME</a>
					<a href="daily.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/devotion.png" />
					<br/>
					Daily</a>
					<a href="quotes.php" data-transition='flip' class="span_menu" style="color: black; border-left: 1px solid gray;"><img src="icons/quote.png" />
					<br/>
					Quotes</a>
					<a href="sermon.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/sermon.png" />
					<br/>
					Sermon</a>
					<a href="books.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/books.png" />
					<br/>
					Books</a>
					<a href="videos.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/videos.png" />
					<br/>
					Videos</a>
					<a href="loc.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/loc.png" />
					<br/>
					Near You</a>
					<a href="more.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/more.png" />
					<br/>
					Donate</a>
				</div>

			</div>

			<div id='content' data-role='content'>

				<!-- IMAGE SLIDER -->
				<!-- <div class="slider-wrapper theme-defaults"> -->

				<div id="sliders" class="nivoSliders">
					<img src="img/slide/1.jpg" data-thumb="img/slide/otabil1.jpg"  alt="ICGC Slide" class="img_slide"/>
					<img src="img/slide/2.jpg" data-thumb="img/slide/otabil2.jpg" alt="ICGC Slide"  class="img_slide"/>
					<img src="img/slide/3.jpg" data-thumb="img/slide/otabil1.jpg"  alt="ICGC Slide"  class="img_slide"/>
					<img src="img/slide/4.jpg" data-thumb="img/slide/otabil4.jpg"  alt="ICGC Slide"  class="img_slide"/>
					<img src="img/slide/5.jpg" data-thumb="img/slide/otabil4.jpg"  alt="ICGC Slide"  class="img_slide"/>
				</div>

				<!-- </div> -->
				<!-- END OF IMAGE SLIDER -->
				<p id="display" style='display: non;'>

				</p>
			</div>

			<!-- <div id='footer' data-role='footer'>
			</div> -->
		</div>

	</body>
</html>
<script type="text/javascript" >
	// $(document).ready(function() {
	// function updateIndicator() {
	// document.getElementById('indicator').textContent = navigator.onLine ? 'online' : 'offline';
	// };
	//
	// // var menuId = $("ul.nav").first().attr("id");
	// var request = $.ajax({
	// // url : "script.php",
	// url : "http://216.224.161.207/icgc/pick.php",
	// type : "GET",
	// dataType : "html"
	// });
	//
	// request.done(function(msg) {
	// // alert(msg);
	// $("#display").html(msg);
	// });
	//
	// request.fail(function(jqXHR, textStatus) {
	// $("#display").html("Request failed: Poor internet connection");
	// });
	//
	// $('#slider').nivoSlider();
	// });
</script>

