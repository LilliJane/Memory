<?php

if ($_POST['theme'])
	$_SESSION['theme'] = $_POST['theme'];
else
	$_SESSION['theme'] = "histoire";

if ($_POST['name'])
	$_SESSION['name'] = $_POST['name'];
else
	$_SESSION['name'] = "Memory";

if ($_POST['level'])
	$_SESSION['level'] = $_POST['level'];
else
	$_SESSION['level'] = "maternelle";

if ($_POST['consigne'])
	$_SESSION['consigne'] = $_POST['consigne'];
else
	$_SESSION['consigne'] = "Retrouve les deux cartes correspondantes !";

if ($_POST['nb_level'])
	$_SESSION['nb_level'] = $_POST['nb_level'];
else
	$_SESSION['nb_level'] = 1;

if ($_POST['time'])
	$_SESSION['time'] = $_POST['time'];
else
	$_SESSION['time'] = 5;

if ($_POST['essai'])
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
 

<p>Bonjour !</p>

<?php echo $_SESSION['theme']; ?>

    <!--div class="group">
      <p>
       Veuillez indiquer le nombre de cartes souhaité :<br />
        <input type="radio" name="nb_cards"  value="8" id="8" /> <label for="8">8 cartes</label><br />
        <input type="radio" name="nb_cards" value="12" id="12" /> <label for="12">12 cartes</label><br />
        <input type="radio" name="nb_cards" value="16" id="16" /> <label for="16">16 cartes</label><br />
        <input type="radio" name="nb_cards" value="20" id="20" /> <label for="20">20 cartes</label><br />
        <input type="radio" name="nb_cards" value="24" id="24" /> <label for="24">24 cartes</label>
      </p>
    </div-->
