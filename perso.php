<title id="title-doc">Memory Game</title>
<link rel="stylesheet" href="style.css" />

<?php

if (isset($_POST['theme']))
	$_SESSION['theme'] = $_POST['theme'];
else
	$_SESSION['theme'] = "histoire";

if (isset($_POST['name']))
	$_SESSION['name'] = $_POST['name'];
else
	$_SESSION['name'] = "Memory";

if (isset($_POST['level']))
	$_SESSION['level'] = $_POST['level'];
else
	$_SESSION['level'] = "maternelle";

if (isset($_POST['consigne']))
	$_SESSION['consigne'] = $_POST['consigne'];
else
	$_SESSION['consigne'] = "Retrouve les deux cartes correspondantes !";

if (isset($_POST['nb_level']))
	$_SESSION['nb_level'] = $_POST['nb_level'];
else
	$_SESSION['nb_level'] = 1;

if (isset($_POST['time']))
	$_SESSION['time'] = $_POST['time'];
else
	$_SESSION['time'] = 5;

if (isset($_POST['essai']))
	$_SESSION['essai'] = $_POST['essai'];
else
	$_SESSION['essai'] = 100;

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
 

<form action="game_perso.php" method="post">
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
</form>
