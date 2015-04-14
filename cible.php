<?php

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['theme'] = $_POST['theme'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['time'] = $_POST['time'];
$_SESSION['essai'] = $_POST['essai'];
$_SESSION['nb_cards'] = $_POST['nb_cards'];
$_SESSION['consigne'] = $_POST['consigne'];
$_SESSION['multi'] = $_POST['multi'];
$_SESSION['score'] = $_POST['score'];
$_SESSION['level'] = $_POST['level'];
$_SESSION['nb_level'] = $_POST['nb_level'];
?>
 

<p>Bonjour !</p>

<?php echo $_SESSION['theme']; ?>
