<?php include ("connect.php"); ?>
<link rel="stylesheet" href="style.css" />

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
		session_start();

		$post_user = $_POST['username'];
		$post_pass = sha1($_POST['password']);

		$query_user = $link->prepare("SELECT username FROM memory_account WHERE username = ?");
		$query_user->bind_param('s', $post_user);
		$query_user->execute();
		$result_user = $query_user->get_result();
		$username = $result_user->fetch_assoc();

		$query_pass = $link->prepare("SELECT password FROM memory_account WHERE password = ?");
		$query_pass->bind_param('s', $post_pass);
		$query_pass->execute();
		$result_pass = $query_pass->get_result();
		$password = $result_user->fetch_assoc();

		if ($result_user->num_rows == 0)
			echo 'Le nom d\'utilisateur n\'existe pas.';
		else if ($result_pass->num_rows == 0)
			echo 'Le mot de passe est incorrect.';
		else
			echo '<meta http-equiv="refresh" content="0.1; URL=/ecolesinfo/Memory/home.php">';
	}