<?php include ("connect.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
	</head>
  <title id="title-doc">Memory Game</title>

<body>

   <hgroup>
    <h3>Nouvelle Partie</h3>
  </hgroup>
  <form action="perso.php" method="post" class="new_part">
    <div class="group">
       <label for="theme">Quel thème souhaitez-vous utiliser ?</label><br />
       <select name="genre" id="genre">
          <?php
            $result = $link->query('SELECT * FROM memory_genre');

            while ($memory_type = $result->fetch_assoc())
              echo '<option value=" ' . $memory_type['id'] . '"> ' . $memory_type['nom'] . '</option>';
           ?>
       </select>
       <br /><br />
    </div>

    <div class="group">
      <input type="text" name="name"><span class="highlight"></span><span class="bar"></span>
      <label>Nom</label>
    </div>

    <div class="group">
       <label for="level">Niveau scolaire ?</label><br />
       <select name="level" id="level">
           <option value="1">Maternelle</option>
           <option value="2">CP</option>
           <option value="3">CE1</option>
           <option value="4">CE2</option>
           <option value="5">CM1</option>
           <option value="6">CM2</option>
       </select>
    </div>

    <div class="group">
      <input type="text" name="order"><span class="highlight"></span><span class="bar"></span>
      <label>Consigne</label>
    </div>

    <div class="group">
      <input type="text" name="time"><span class="highlight"></span><span class="bar"></span>
      <label>Durée du niveau</label>
    </div>

    <div class="group">
      <input type="text" name="try"><span class="highlight"></span><span class="bar"></span>
      <label>Nombre d'essais maximum</label>
    </div>

    <div class="group">
      <input type="checkbox" name="multi"><span class="highlight"></span><span class="bar"></span>
      <label>Mode deux joueurs ?</label>
    </div>

    <div class="group">
      <input type="checkbox" name="score"><span class="highlight"></span><span class="bar"></span>
      <label>Affichage du score</label>
    </div>

    <div class="group">
      <input type="text" name="nblevel"><span class="highlight"></span><span class="bar"></span>
      <label>Nombre de niveaux</label>
    </div>

    <div class="group">
      <p>
       Affichage :<br />
        <input type="checkbox" name="type_end1" value="professeur" >Retour au professeur
        <input type="checkbox" name="type_end2" value="rejouer" >Rejouer
        <input type="checkbox" name="type_end3" value="défier"  >Défier
      </p>
    </div>

    <button type="submit" class="button buttonBlue">Suivant
     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
  </form>

  <form action="game.php" method="post">
    <br />Passer l'étape suivante, obtenir des cartes random, sauvegarder et jouer :
    <button type="submit" name="game">Jouer
    </button>
  </form>
