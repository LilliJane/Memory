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
     <div class="row">
       <div class="col-md-6">
          <label for="theme">Quel thème souhaitez-vous utiliser ?</label> <br />
          <div class="custom-select">
          <select class="custom" name="genre" id="genre">
             <?php
               $result = $link->query('SELECT * FROM memory_genre');

               while ($memory_type = $result->fetch_assoc())
                 echo '<option value=" ' . $memory_type['id'] . '"> ' . $memory_type['nom'] . '</option>';
              ?>
          </select>
          </div>
       </div>
 
       <div class="col-md-6">
         <label>Durée du niveau</label>
         <input type="text" class="right" name="time">
       </div>
       </div>


     <div class="row">

       <div class="col-md-6"> 
         <label>Nom</label> <br />
         <input type="text" name="name">
       </div>

      <div class="col-md-6">
         <label>Nombre d'essais</label>
         <input type="text" class="right" name="try">
       </div>
   </div>
     <div class="row">


       <div class="col-md-6">
          <label for="level">Niveau scolaire ?</label> <br />
          <div class="custom-select">
          <select class="custom" name="level" id="level">
              <option value="1">Maternelle</option>
              <option value="2">CP</option>
              <option value="3">CE1</option>
              <option value="4">CE2</option>
              <option value="5">CM1</option>
              <option value="6">CM2</option>
          </select>
          </div>
       </div>

       <div class="col-md-6">
         <label>Mode deux joueurs ?</label>
         <input type="checkbox" class="right" name="multi">
       </div>

       </div>
     <div class="row">

       <div class="col-md-6">
         <label>Consigne</label> <br />
         <input type="text" name="order">
       </div>

       <div class="col-md-6">
         <p>
          Affichage :
           <input type="checkbox" class="right" name="type_end3" value="défier">Défier
         </p>
       </div>
 
      <div class="row col-md-3 col-md-offset-3" style="margin-top: 20px">
       <button type="submit" class="new-crea">Suivant
       </button>
      </div>
     </form>

     <form action="game.php" method="post">
      <div class="row col-md-3 col-md-offset-9" style="margin-top: 40px">
       <button type="submit" class="new-crea" name="game">Jouer
       </button> 
      </div>
     </form>
   </div>
</body>