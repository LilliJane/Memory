<?php

include ("config.php");

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Error " . mysqli_error($link)); 

if (!$link)
  echo 'La connexion à la base de donnée'.mysql_error();

?>