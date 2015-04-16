
<head>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<title id="title-doc">Memory Game</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript --> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
   			 $('#hidesplash').fadeIn(3000).removeClass('hidden');
		});
	</script>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<!--div id="splashscreen">
		<?php echo '<img src=splach.gif?id=' . date(ymdHis) . ' style="height: 100%; width: 100%; margin-top:-6%"/>';?>
	</div-->


	<div id="hidesplash" class="container text-center col-md-4 col-md-offset-4" style="margin-top: 15%; display:none">
		<h2>Choisissez votre mode de jeu :</h2>
		<ul> 
  			<a href="http://atelier33.ac-bordeaux.fr/ecolesinfo/Memory/game.php" class="pad_a"><li>PARTIE RAPIDE</li></a>
  			<a href="http://atelier33.ac-bordeaux.fr/ecolesinfo/Memory/admin.php" class="pad_a"><li class="border_li">PROFESSEUR</li></a>
  		</ul>
	</div>
</body>