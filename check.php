<?php include_once('resize_image.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Rachel Whiting, Home</title>
	<!-- S T Y L E (default) -->
	<link rel="stylesheet" media="screen" href=".//public/css/style.css" />
</head>
<body>
	<div class="wrap">
	<header>
		<div class="full clearfix center-txt uppercase">
			<hgroup>
				<h2><a href="./">Rachel Whiting</a></h2>
				<p id="sub-header">Photographer</p>
			</hgroup>
			<nav>
				<ul>
					<li>
						<p><a href="./?/commissioned-photography/" class="">Commissioned Photography</a></p>
					</li>
					<li>
						<p><a href="./?/tear-sheets/" class="">Tear Sheets</a></p>
					</li>
					<li>
						<p><a href="./?/personal-photography/" class="">Personal Photography</a></p>
					</li>
					<li>
						<p><a href="./?/about-and-contact/" class="">About & Contact</a></p>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<p style="padding:80px; text-align:center; text-transform:uppercase;"><?php echo $resize_image_result;?><p>

	</div><!-- .wrap -->
	
	<!-- S C R I P T S (default) -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<!-- S C R I P T (font) -->
	<script type="text/javascript">
	
		// Webfont crossbrowser script
		WebFontConfig = {custom: { families: ['sans-serif'],
			urls: [ './public/css/fontface.css' ] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
		
	</script>
</body>
</html>