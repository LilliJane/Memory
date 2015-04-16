<?php include ("soap.php");

/**
* Display the game
*/
class Display
{
	function game($count, $genre, $level, $game, $result)
	{
		include ("connect.php");
		$res = $link->prepare('SELECT nom FROM memory_genre WHERE id = ?');
		$res->bind_param('d', $genre);
		$res->execute();
		$res = $res->get_result();
		$genre_name = $res->fetch_assoc();

		$res = $link->prepare('SELECT nom FROM memory_level WHERE id = ?');
		$res->bind_param('d', $level);
		$res->execute();
		$res = $res->get_result();
		$level_name = $res->fetch_assoc();

		?>
		<h4>
			Niveau sélectionné :  <font color="FF0000"><?php echo $level_name['nom']; ?></font><br />
			Thème abordé : <font color="FF0000"><?php echo $genre_name['nom']; ?></font><br /><br />
		</h4>
		<?php

		if ($count == 0)
		{
			echo '<h3>Aucun résultat trouvé.<br />';
			echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">Retour</a></h3>';
		}
		while ($count > 0)
		{
			echo '<img src="img/cards/' . $game['id'] . '_a.png" /> &nbsp;'; // Temporary &nbsp;
			echo '<img src="img/cards/' . $game['id'] . '_b.png" /> &nbsp;'; // Temporary &nbsp;

			$game = $result->fetch_assoc();
			$count = $count - 1;
		}
	}
}

?>

<title id="title-doc">Memory Game</title>
<link rel="stylesheet" href="style.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php include ("connect.php"); ?>

<center>

<?php
	if (!isset($_POST['gamestart_random']) && !isset($_POST['gamestart_predef']))
	{
		?>
		<form method="post" action="game.php">
		<input type="text" name="keyname" class="pad-txt" placeholder="Entrez votre code ici" />
			<br /><br />
	    	<div class="group">
	    		<label for="level">Niveau : </label>
    		 	<select name="level" id="level">
        			<option value="1">Maternelle</option>
					<option value="2">CP</option>
					<option value="3">CE1</option>
					<option value="4">CE2</option>
					<option value="5">CM1</option>
					<option value="6">CM2</option>
       			</select>
    		</div>
    		<br /><br />
	 		<button type="submit" name= "gamestart_random"/>JOUER</button>
	 	</form>
	 	<?php
	}
	else
	{
		?>
		<div class="container-fluid">
		<h1>LE JEU COMMENCE</h1>
		<br />

		<?php
		if (isset($_POST['gamestart_random']))
		{
			$studentk = new SoapConnect();
			$coucou = $studentk->retrieve_student($_POST['keyname']);
			if (!$coucou) {
				echo '<h3>Le code entré n\'existe pas</h3>';
				exit();
			}

			$result = $link->query('SELECT id FROM memory_genre ORDER BY RAND() LIMIT 1');
			$rand_genre = $result->fetch_assoc();

			$result = $link->query('SELECT type FROM memory_cards ORDER BY RAND() LIMIT 1');
			$rand_type = $result->fetch_assoc();

			$nb_result = 0;
			$result = $link->prepare('SELECT * FROM memory_cards WHERE type = ? AND genre = ? AND level <= ?');
			$result->bind_param("ddd", $rand_type['type'], $rand_genre['id'], $_POST['level']);
			$result->execute();
			$result = $result->get_result();
			$game = $result->fetch_assoc();

			$count = $result->num_rows;

			# Display Game
			$display = new Display();
			$display = $display->game($count, $rand_genre['id'], $_POST['level'], $game, $result);

		}
		else if (isset($_POST['gamestart_predef']))
		{
			$nb_result = 0;
			$result = $link->prepare('SELECT * FROM memory_cards WHERE genre = ? AND level <= ?');
			$result->bind_param("dd", $_POST['genre'], $_POST['level']);
			$result->execute();
			$result = $result->get_result();
			$game = $result->fetch_assoc();

			$count = $result->num_rows;

			# Display Game
			$display = new Display();
			$display = $display->game($count, $_POST['genre'], $_POST['level'], $game, $result);
		}

?>

</center>