<center>

<?php
	if (!isset($_POST['lol']))
	{
		?>
		<input type="text" name="code" placeholder="Entrez votre code ici" />
		<br /><br />
	 	<form method="post" action="game.php"><input type="submit" name = "lol" value="Commencer la partie" /><br /><br /></form>
	 	<?php
	}
	else
	{
		?>
			<h1>LE JEU COMMENCE</h1>
		<?php
	}
?>

</center>