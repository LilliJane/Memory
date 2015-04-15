<?php include ("connect.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>

  <title id="title-doc">Memory Game</title>

<body>

   <hgroup>
    <h1>Nouvelle Partie</h1>
  </hgroup>
  <form action="perso.php" method="post">
    <div class="group">
       <label for="theme">Thème : </label> &nbsp;
       <select name="theme" id="theme">
          <?php
            $result = $link->query('SELECT * FROM memory_genre');

            while ($memory_type = $result->fetch_assoc())
              echo '<option value=" ' . $memory_type['id'] . '"> ' . $memory_type['nom'] . '</option>';
           ?>
       </select>
        <a href="#">Ajouter une catégorie</a><br /><br />
    </div>

    <div class="group">
      <label>Nom : </label> &nbsp;
      <input type="text" name="name">
      <br /><br />
    </div>

    <div class="group">
       <label for="level">Niveau scolaire : </label> &nbsp;
       <select name="level" id="level">
          <?php
            $result = $link->query('SELECT * FROM memory_level');

            while ($memory_type = $result->fetch_assoc())
              echo '<option value=" ' . $memory_type['id'] . '"> ' . $memory_type['nom'] . '</option>';
           ?>
       </select>
       <br /><br />
    </div>

    <div class="group">
      <label>Consigne : </label> &nbsp;
      <input type="text" name="consigne"><span class="highlight"></span><span class="bar"></span>
    </div><br />

    <div class="group">
      <label>Durée du niveau : </label> &nbsp;
      <input type="text" name="time"><span class="highlight"></span><span class="bar"></span>
    </div><br />

    <div class="group">
      <label>Nombre d'essais maximum : </label> &nbsp;
      <input type="text" name="essai"><span class="highlight"></span><span class="bar"></span>
    </div><br />

    <div class="group">
      <label>Mode deux joueurs : </label> &nbsp;
      <input type="checkbox" name="multi"><span class="highlight"></span><span class="bar"></span>
    </div><br />

    <div class="group">
      <label>Affichage du score : </label> &nbsp;
      <input type="checkbox" name="score"><span class="highlight"></span><span class="bar"></span>
    </div><br />

    <div class="group">
      <label>Nombre de niveaux : </label> &nbsp;
      <input type="text" name="nb_level"><span class="highlight"></span><span class="bar"></span>
    </div><br />

    <div class="group">
      <p>
       Affichage :<br />
        <input type="checkbox" name="type_end1" value="professeur" >Retour au professeur<br />
        <input type="checkbox" name="type_end2" value="rejouer" >Rejouer
        <input type="checkbox" name="type_end3" value="défier"  >Défier
      </p>
    </div>

    <button type="submit" class="button buttonBlue">Suivant
     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
  </form>

  <form action="game.php" method="post">
    <button type="submit" name="game">Jouer
    </button>
  </form>
