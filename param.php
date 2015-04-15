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
  <form action="perso.php" method="post">
    <div class="group">
       <label for="theme">Quel thème souhaitez-vous utiliser ?</label><br />
       <select name="theme" id="theme">
           <option value="nb_reco">Attribution nombres en lettre et en chiffres</option>
           <option value="calcul">Attribution d'un calcul avec son résultat</option>
           <option value="histoire">Attribution d'une date avec un évènement</option>
           <option value="géographie">Attribution d'une capitale à son pays</option>
           <option value="animaux">Retrouver deux animaux identiques</option>
           <option value="anglais">Retrouver le mot français correspondant en anglais</option>
           <option value="espagnol">Retrouver le mot français correspondant en espagnol</option>
           <option value="singplur">Retrouver le mot singulier correpondant à son pluriel</option>
       </select>
    </div>
    <div class="group">
      <input type="text" name="name"><span class="highlight"></span><span class="bar"></span>
      <label>Nom</label>
    </div>
    <div class="group">
       <label for="level">Niveau scolaire ?</label><br />
       <select name="level" id="level">
           <option value="maternelle">Maternelle</option>
           <option value="ce1">CE1</option>
           <option value="ce2">CE2</option>
           <option value="cm1">CM1</option>
           <option value="cm2">CM2</option>
       </select>
    </div>
    <div class="group">
      <input type="text" name="consigne"><span class="highlight"></span><span class="bar"></span>
      <label>Consigne</label>
    </div>
    <div class="group">
      <input type="text" name="time"><span class="highlight"></span><span class="bar"></span>
      <label>Durée du niveau</label>
    </div>
    <div class="group">
      <input type="text" name="essai"><span class="highlight"></span><span class="bar"></span>
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
      <input type="text" name="nb_level"><span class="highlight"></span><span class="bar"></span>
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
    <button type="submit" name="game">Jouer
    </button>
  </form>
