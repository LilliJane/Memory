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
           			<option value="2">CE1</option>
           			<option value="3">CE2</option>
           			<option value="4">CM1</option>
           			<option value="5">CM2</option>
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
			<h1>LE JEU DE <font color="FF0000"><?php echo $_POST['level'] ?></font> COMMENCE</h1>
			<br /><br />
		<?php
		$row = $link->query('SELECT id FROM genre ORDER BY RAND() LIMIT 1');
		while ($rand_genre = mysql_fetch_array($row)) {
			echo $rand_genre[0];
		}
		/*

		$rand_type = $link->query('SELECT DISTINCT(type) FROM memory_cards ORDER BY RAND() LIMIT 1');

		$result = $link->query('SELECT carte_a, carte_b FROM memory_cards WHERE niveau = ' . $_POST['level'] . ' AND genre = ' . $rand_genre['classtype'] . ' AND type = ' . $rand_type['classtype']);
		/*while ($row = $result->fetch_assoc())
		{
			echo '<p><strong>' . htmlspecialchars($row['carte_a']) . '</strong> : ' . htmlspecialchars($row['carte_b']) . '</p>';
		}*/

	}
?>

</center>