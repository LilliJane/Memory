<?php include ("connect.php"); ?>

<?php
	if (!isset($_POST['connexion']))
	{
		?>

			<center>
				<h2>Vous devez vous connecter pour accéder à cette partie</h2>

				<form method="post" action="admin.php">
					<input type="text" name="username" id="username" placeholder="Nom d'utilisateur" />
					<br /><br />
					<input type="password" name="password" placeholder="Mot de passe" />
			   		<br /><br />
			 		<input type="submit" name= "connexion" value="Connexion" />
			 	</form>
			</center>
		<?php
	}
	else
	{
		$post_user = $_POST['username'];
		$post_pass = sha1($_POST['password']);
		$result_user = $link->query("SELECT username FROM memory_account WHERE username = '$post_user'");
		$result_pass = $link->query("SELECT password FROM memory_account WHERE password = '$post_pass'");
		$username = $result_user->fetch_assoc();
		$password = $result_pass->fetch_assoc();

		if ($result_user->num_rows == 0)
			echo 'Le nom d\'utilisateur n\'existe pas.';
		else if ($result_pass->num_rows == 0)
			echo 'Le mot de passe est incorrect.';
	}