<?php include ("connect.php"); ?>

	<title id="title-doc">Memory Game</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript --> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style.css" />

<?php
	if (!isset($_POST['connexion']))
	{
		?>
		<div class="container text-center col-md-4 col-md-offset-4" style="margin-top: 15%">
			<form method="post" action="admin.php" autocomplete="off" class="form-horizontal" role="form">
				<div class="div-auth">
					<input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" autocomplete="off"/>
					<hr/>
					<input type="password" class="form-control input-auth" name="password" placeholder="Mot de passe" autocomplete="off"/>
				</div>

				<div class="row" style="margin-top: 20px">
	 				<button type="submit" class="access" name= "connexion"/>ACCÉDER
	 				</button>
	 			</div>
	 		</form>
		</div>
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