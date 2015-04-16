<?php include ("connect.php");

session_start();

?>

<title id="title-doc">Memory Game</title>
<link rel="stylesheet" href="style.css" />

<?php

if (!isset($_POST['save']))
{
	if (isset($_POST['genre']))
		$_SESSION['genre'] = $_POST['genre'];
	else
		$_SESSION['genre'] = 0;

	if (isset($_POST['name']))
		$_SESSION['name'] = $_POST['name'];
	else
		$_SESSION['name'] = "Memory";

	if (isset($_POST['level']))
		$_SESSION['level'] = $_POST['level'];
	else
		$_SESSION['level'] = 1;

	if (isset($_POST['order']))
		$_SESSION['order'] = $_POST['order'];
	else
		$_SESSION['order'] = "Retrouve les deux cartes correspondantes !";

	if (isset($_POST['nblevel']))
		$_SESSION['nblevel'] = $_POST['nblevel'];
	else
		$_SESSION['nblevel'] = 1;

	if (isset($_POST['time']))
		$_SESSION['time'] = $_POST['time'];
	else
		$_SESSION['time'] = 5;

	if (isset($_POST['try']))
		$_SESSION['try'] = $_POST['try'];
	else
		$_SESSION['try'] = 100;

	/*if (isset($_POST['nb_cards']))
		$_SESSION['nb_cards'] = $_POST['nb_cards'];
	else
		$_SESSION['nb_cards'] =  "16"; */


	if (isset($_POST['multi']))
		$_SESSION['multi'] = $_POST['multi'];
	else
		$_SESSION['multi'] = 0;

	if (isset($_POST['score']))
		$_SESSION['score'] = $_POST['score'];
	else
		$_SESSION['score'] = 0;

	if (isset($_POST['type_end1']))
		$_SESSION['type_end1'] = $_POST['type_end1'];
	else
		$_SESSION['type_end1'] = 0;

	if (isset($_POST['type_end2']))
		$_SESSION['type_end2'] = $_POST['type_end2'];
	else
		$_SESSION['type_end2'] = 0;

	if (isset($_POST['type_end3']))
		$_SESSION['type_end3'] = $_POST['type_end3'];
	else
		$_SESSION['type_end3'] = 0;

	?>

	<form action="perso.php" method="post">
		<div class="group">
		  <h2>
		  Couleurs:
		  	<input type="radio" name="color" value="" id="1" /> <label for="1"></label>
		  	<input type="radio" name="color" value="" id="2" /> <label for="1"></label>
		  	<input type="radio" name="color" value="" id="3" /> <label for="1"></label>
		  	<input type="radio" name="color" value="" id="4" /> <label for="1"></label>
		  	<input type="radio" name="color" value="" id="5" /> <label for="1"></label>
		  	<input type="radio" name="color" value="" id="6" /> <label for="1"></label>
		  </h2>
		</div>
		<div class="group">
		  <h2>
		    Type de cartes:
		    	<input type="radio" name="type" value="ftext" id="1" /><label for="ftext">Uniquement du texte</label>
		    	<input type="radio" name="type" value="fimages"/><label for="ftext">Uniquement des images</label>
		    	<input type="radio" name="type" value="imagestext"/><label for="ftext">Mélange de texte et d'images</label>
		  </h2>
		</div>
	    <div class="group">
	      <h2>
	       Nombre de cartes affichées :<br />
	        <input type="radio" name="nb_cards"  value="8" id="8" /> <label for="8">8 cartes</label>
	        <input type="radio" name="nb_cards" value="12" id="12" /> <label for="12">12 cartes</label>
	        <input type="radio" name="nb_cards" value="16" id="16" /> <label for="16">16 cartes</label>
	        <input type="radio" name="nb_cards" value="20" id="20" /> <label for="20">20 cartes</label>
	        <input type="radio" name="nb_cards" value="24" id="24" /> <label for="24">24 cartes</label>
	      </h2>
	    </div>

	    <!-- Tmp -->
        <input type="hidden" name="cards" value="88 89 90 91"/>
	   	<button type="submit" name="save">Sauvegarder et commencer la partie</button>
  	</form>

	<?php
}
else
{
	/* TODO: Save the new cards (on memory_cards) */

	/* We save the game */
	$query_user = $link->prepare('INSERT INTO `memory_game` (`name`, `level`, `order`, `nblevel`, `try`, `time`, `multi`, `cards`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
	$query_user->bind_param('sdsdddds', $_SESSION['name'], $_SESSION['level'], $_SESSION['order'], $_SESSION['nblevel'], $_SESSION['try'], $_SESSION['time'], $_SESSION['multi'], $_POST['cards']);
	$query_user->execute();

	echo '<center><b>Votre jeu a correctement été sauvegardé. Vous allez être redirigé dans 3 secondes...</b></center>';
	echo '<meta http-equiv="refresh" content="3; URL=/ecolesinfo/Memory/parts.php">';
}
