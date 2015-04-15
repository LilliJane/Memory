<title id="title-doc">Memory Game</title>
<link rel="stylesheet" href="style.css" />
<?php include ("connect.php"); ?>

<center>

<?php
	if (!isset($_POST['lol']))
	{
		?>
		<form method="post" action="game.php">
			<input type="text" name="code" placeholder="Entrez votre code ici" />
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
	 		<input type="submit" name= "lol" value="Commencer la partie" /><br /><br />
	 	</form>
	 	<?php
	}
	else
	{

		?>
		<h1>LE JEU COMMENCE</h1>
		<br />

		<?php
			$result = $link->query('SELECT nom FROM memory_level WHERE id = ' . $_POST['level']);
			$level_name = $result->fetch_assoc();

			$result = $link->query('SELECT id FROM memory_genre ORDER BY RAND() LIMIT 1');
			$rand_genre = $result->fetch_assoc();

			$result = $link->query('SELECT type FROM memory_cards ORDER BY RAND() LIMIT 1');
			$rand_type = $result->fetch_assoc();

			$result = $link->query('SELECT nom FROM memory_genre WHERE id = ' . $rand_genre['id']);
			$genre_name = $result->fetch_assoc();

			$result = $link->query('SELECT * FROM memory_cards WHERE type = ' . $rand_type['type'] . ' AND genre = ' . $rand_genre['id'] . ' AND level <= ' . $_POST['level']);
			$game = $result->fetch_assoc();

			$count = $result->num_rows;
		?>

		<h4>
			Niveau sélectionné :  <font color="FF0000"><?php echo $level_name['nom'] ?></font><br />
			Thème abordé : <font color="FF0000"><?php echo $genre_name['nom']; ?></font>
		</h4>
		
		<table border="1" class="table">
			<tr>
				<th>Carte A</th>
				<th>Carte B</th>
			</tr>
				<?php
					if ($count == 0)
						echo 'Aucun résultat trouvé.<br /><br />';
					while ($count > 0)
					{	
						echo '<tr>';
						echo '<td>' . $game['carte_a'] . '</td>';
						echo '<td>' . $game['carte_b'] . '</td>';
						echo '</tr>';

						$game = $result->fetch_assoc();
						$count = $count - 1;
					}
				?>
		</table>
		<?php
	}
?>

</center>