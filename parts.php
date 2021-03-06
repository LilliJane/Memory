<?php include ("connect.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
 
    <title id="title-doc">Memory Game</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional genre -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-genre.min.css">

    <!-- Latest compiled and minified JavaScript --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css" />
	  </head>

  <body>
  <div class="container">
  <a href="http://atelier33.ac-bordeaux.fr/ecolesinfo/Memory/home.php"><img src="img/picto/decoupe/retour.png"/></a>
  <h1 style="display: inline-block">PARTIE PRÉDÉFINIE</h1>
  <form action="game.php" method="post" class="new_part">
 
  <div class="row">
    <div class="col-md-3">
       <label for="genre">Thème : </label> <br />
       <div class="custom-select">
       <select class="custom" name="genre"id="genre">
          <?php
            $result = $link->query('SELECT * FROM memory_genre');

            while ($memory_genre = $result->fetch_assoc())
              echo '<option value=" ' . $memory_genre['id'] . '"> ' . $memory_genre['nom'] . '</option>';
           ?>
       </select>
       </div>
    </div>

    <div class="col-md-3">
        <label for="level">Niveau scolaire : </label> <br />
        <div class="custom-select">
        <select class="custom" name="level" id="level">
          <?php
            $result = $link->query('SELECT * FROM memory_level');

            while ($memory_level = $result->fetch_assoc())
              echo '<option value=" ' . $memory_level['id'] . '"> ' . $memory_level['nom'] . '</option>';
           ?>
       </select>
      </div>
    </div>

    <div class="col-md-3">
      <label>Durée du niveau : </label> <br />
      <input type="text" name="time" maxlength="20" class="pad-txt">
    </div>

    <div class="col-md-3">
      <label>Nombre d'essais: </label> <br />
      <input type="text" name="try" class="pad-txt"></div>
    </div>

    <div class="row col-md-3 col-md-offset-7" style="margin-top: 20px">
      <button type="submit" name="gamestart_predef" class="game">JOUER</button>
    </div>
  </form>

<div class="row" style="display:inline-block">
  <h1>MES PARTIES ENREGISTRÉES</h1>

    <table border="1" class="table">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>level</th>
        <th>order</th>
        <th>nblevel</th>
        <th>try</th>
        <th>time</th>
        <th>multi</th>
        <th>cards</th>
      </tr>
        <?php

          $result = $link->query('SELECT * FROM memory_game');
          $game = $result->fetch_assoc();

          $level_join = $link->prepare('SELECT nom FROM memory_level WHERE id = ?');
          $level_join->bind_param('d', $game['level']);
          $level_join->execute();
          $level_result = $level_join->get_result();
          $level_text = $level_result->fetch_assoc();

          if ($count = $result->num_rows == 0)
            echo 'Aucune partie n\'a été trouvée sur votre compte.<br /><br />';
          while ($count);
          {
            echo '<tr>';
            echo '<td>' . $game['id'] . '</td>';
            echo '<td>' . $game['name'] . '</td>';
            echo '<td>' . $level_text['nom'] . '</td>';
            echo '<td>' . $game['order'] . '</td>';
            echo '<td>' . $game['nblevel'] . '</td>';
            echo '<td>' . $game['try'] . '</td>';
            echo '<td>' . $game['time'] . '</td>';
            echo '<td>' . $game['multi'] . '</td>';
            echo '<td>' . $game['cards'] . '</td>';
            echo '</tr>';
            $game = $result->fetch_assoc();
            $count = $count - 1;
          }
        ?>
    </table>

  </div>
</div>
