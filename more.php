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
		<div id='quotes' data-role='page' >

			<div id='header' data-role='header' >
				<div class="div_header">
					DONATION
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
				<form>
					Full Name:
					<input type="text" name="name" value="" id="name"/>
					Email:
					<input type="email" name="email" value="" id="email"/>
					Phone:
					<input type="text" name="phone" value="" id="pnone"/>
					Type of Payment:
					<select name="payment">
						<option Value='none'>PLEASE SELECT</option>
						<option Value='Donation'>Donation</option>
						<option Value='Firstfruit'>Firstfruit</option>
						<option Value='Pledge'>Pledge</option>
						<option Value='Offering'>Offering</option>
					</select>
					Additional Info: 					<textarea name="extra"></textarea>
					Currency:


					<select name="currency">
						<option Value='cedis'>GHC</option>
					</select>
					Amount:
					<input type="text" name="amount" id="amount" />
					
					<input type="submit" name="donate" />

				</form>
			</div>

			<div id='footer' data-role='footer'>

			</div>
		</div>

	</body>
</html>
<script type="text/javascript" >
	// $(document).ready(function() {
	//
	// $('#slider').nivoSlider();
	//
	// });
</script>
