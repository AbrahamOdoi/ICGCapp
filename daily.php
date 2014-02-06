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

	</head>
	<body>
		<div id="daily" data-role='page' >

			<div id='header' data-role='header' >
				<div class="div_header">
					DAILY
				</div>
				<div class="wrapper1">
					<a href="mainpage.php" data-transition='flip'  class="span_menu" style="color: black; border-left: 1px solid gray;"><img src="icons/home.png" />
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
				<!-- <p style='vertical-align:center;color: gray;'>
				Daily Devotion<img src="img/2_1.jpg" class="img_quote" style="float: left;"/>
				</p> -->

				<!-- <p id="displays" style='display: non;'>
				<?php
				$url = "http://216.224.161.207/icgc/pick.php";
				$myvars = 'destination=' . $destination . '&source=' . $senderID . '&message=' . $message;

				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				echo $response = curl_exec($ch);

				echo 'teee';
				?>
				</p> -->
				<div id='content' data-role='content'>
					<span class="date">1st February</span><br/>
					<img src="img/flower1.jpg" height="10%" />
					<div class="p_quotes">
						<span class="date">GENESIS 22:14 </span><br/>
						14 and Abraham calleth the name of that place `Jehovah-Jireh,' because it is said this day in the mount, `Jehovah doth provide.'

						One of God's names is Jehovah Jireh which is a compound name meaning the Lord sees ahead and provides.

						“Jehovah-Jireh” means, “The Lord will see to it,” that is, “The Lord will provide.”

						My car recently quit running when I was in another city. As I prayed and looked to God, He helped me to work things out.

						While I didn't actually complain to God about having car trouble -- the thoughts were certainly there. (Thoughts like the repair money could have been put to a better use.)

						I believe God spoke to my heart that He could have kept my car running perfectly. Or, He could have supernaturally healed it. But if He would have, then I would not have experienced Him as the One who sees ahead and provides, which He did.

						It was not the first time God had provided for me, of course. But it is still always thrilling to know that God cares for you, and that He makes plans for your provision, even before you know you will need it.

						Our God is mighty -- and wonderful!

						SAY THIS: God always sees ahead and provides for me.
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
					</div>

				</div>
			</div>

			<div id='footer' data-role='footer'>

			</div>
		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {
		var menuId = $("ul.nav").first().attr("id");
		var request = $.ajax({
			// url : "script.php",
			url : "http://216.224.161.207/icgc/pick.php",
			type : "GET",
			dataType : "html"
		});

		request.done(function(msg) {
			// alert(msg);
			$("#display").html(msg);
		});

		request.fail(function(jqXHR, textStatus) {
			$("#display").html("Request failed: Poor internet connection");
		});

		$('#slider').nivoSlider();
	}); 
</script>
