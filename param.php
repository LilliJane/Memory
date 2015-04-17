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
       <hgroup>
             <a href="http://atelier33.ac-bordeaux.fr/ecolesinfo/Memory/home.php"><img src="img/picto/decoupe/retour.png"/></a>
       <h3 style="display:inline-block">Nouvelle Partie</h3>
     </hgroup>
     <form action="perso.php" method="post" class="new_part">
       <div class="col-md-6">
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

       <div class="col-md-6">
         <input type="text" name="name"><span class="highlight"></span><span class="bar"></span>
         <label>Nom</label>
       </div>

       <div class="col-md-6">
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

       <div class="col-md-6">
         <input type="text" name="order"><span class="highlight"></span><span class="bar"></span>
         <label>Consigne</label>
       </div>

       <div class="col-md-6">
         <input type="text" name="time"><span class="highlight"></span><span class="bar"></span>
         <label>Durée du niveau</label>
       </div>

       <div class="col-md-6">
         <input type="text" name="try"><span class="highlight"></span><span class="bar"></span>
         <label>Nombre d'essais maximum</label>
       </div>

       <div class="col-md-6">
         <input type="checkbox" name="multi"><span class="highlight"></span><span class="bar"></span>
         <label>Mode deux joueurs ?</label>
       </div>

       <div class="col-md-6">
         <input type="checkbox" name="score"><span class="highlight"></span><span class="bar"></span>
         <label>Affichage du score</label>
       </div>

       <div class="col-md-6">
         <input type="text" name="nblevel"><span class="highlight"></span><span class="bar"></span>
         <label>Nombre de niveaux</label>
       </div>

       <div class="col-md-6">
         <p>
          Affichage :<br />
           <input type="checkbox" name="type_end1" value="professeur" >Retour au professeur
           <input type="checkbox" name="type_end2" value="rejouer" >Rejouer
           <input type="checkbox" name="type_end3" value="défier"  >Défier
         </p>
       </div>

     <div class="row col-md-3 col-md-offset-7" style="margin-top: 20px">
       <button type="submit" class="next">Suivant
       </button>
      </div>
     </form>

     <form action="game.php" method="post">
      <div class="row col-md-3 col-md-offset-7" style="margin-top: 40px">
       <button type="submit" class="new-crea" name="game">Jouer
       </button> 
      </div>
     </form>
   </div>
</body>