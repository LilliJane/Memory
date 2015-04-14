<?php

if ($_POST['theme'])
	$_SESSION['theme'] = $_POST['theme'];
else
	$_SESSION['theme'] = "histoire";

if ($_POST['name'])
	$_SESSION['name'] = $_POST['name'];
else
	$_SESSION['name'] = "Memory";

if ($_POST['time'])
	$_SESSION['time'] = $_POST['time'];
else
	$_SESSION['time'] = 5;

if ($_POST['essai'])
	$_SESSION['essai'] = $_POST['essai'];
else
	$_SESSION['essai'] = 100;

if (isset($_POST['nb_cards']))
	$_SESSION['nb_cards'] = $_POST['nb_cards'];
else
	$_SESSION['nb_cards'] =  "16";

if ($_POST['consigne'])
	$_SESSION['consigne'] = $_POST['consigne'];
else
	$_SESSION['consigne'] = "Retrouve les deux cartes correspondantes !";

if (isset($_POST['multi']))
	$_SESSION['multi'] = $_POST['multi'];
else
	$_SESSION['multi'] = 0;

if (isset($_POST['score']))
	$_SESSION['score'] = $_POST['score'];
else
	$_SESSION['score'] = 0;

if ($_POST['level'])
	$_SESSION['level'] = $_POST['level'];
else
	$_SESSION['level'] = "maternelle";

if ($_POST['nb_level'])
	$_SESSION['nb_level'] = $_POST['nb_level'];
else
	$_SESSION['nb_level'] = 1;
?>
 

<p>Bonjour !</p>

<?php echo $_SESSION['theme']; ?>
