<?php include ("connect.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title id="title-doc">Memory Game</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css" />
	  </head>

  <body>

  <h1>PARTIE PRÉDÉFINIE</h1>
  <form action="game.php" method="post" class="new_part">
    <div class="col-md-3">
       <label for="theme">Thème : </label> <br />
       <select name="theme" id="theme">
          <?php
            $result = $link->query('SELECT * FROM memory_genre');

            while ($memory_type = $result->fetch_assoc())
              echo '<option value=" ' . $memory_type['id'] . '"> ' . $memory_type['nom'] . '</option>';
           ?>
       </select>
    </div>

    <div class="col-md-3">
       <label for="level">Niveau scolaire : </label> <br />
       <select name="level" id="level">
          <?php
            $result = $link->query('SELECT * FROM memory_level');

            while ($memory_type = $result->fetch_assoc())
              echo '<option value=" ' . $memory_type['id'] . '"> ' . $memory_type['nom'] . '</option>';
           ?>
       </select>
       <br /><br />
    </div>

    <div class="col-md-3">
      <label>Durée du niveau : </label> <br />
      <input type="text" name="time" maxlength="20"><span class="bar"></span>
    </div>

    <div class="col-md-3">
      <label>Nombre d'essais maximum : </label> &nbsp;
      <input type="text" name="essai"><span class="highlight"></span><span class="bar"></span>
    </div><br /><br />

    <button type="submit">Jouer
    </button> 
  </form>

<h1>MES PARTIES ENREGISTRÉES</h1>
<form action="game.php" method="post">
    <button type="submit">Jouer</button>
</form>
