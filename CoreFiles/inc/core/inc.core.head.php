<head>
	<?php
		if(isset($_GET['head'])){
			switch($_GET['head']){
				case 'cordova':
					echo('<script src="cordova.js"></script>');
					break;
			}
		}
	?>
	<title>RettApp AID</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="core/jquery/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="core/stylesheet/custom.css">
	<script src="core/jquery/2.1.4.min.js"></script>
	<script src="core/jquery/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<?php
		if(isset($_GET['head'])){
			switch($_GET['head']){
				case 'cordova':
					echo('<script src="core/javascript/app.js"></script><script type="text/javascript" src="js/plugins/LaunchMyApp.js"></script>');
					break;	
			}
		}
	?>
	<script src="core/javascript/custom.js"></script>
</head>