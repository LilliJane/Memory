<?php

include ("config.php");

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Error " . mysqli_error($link)); 

if (!$link)
  echo 'La connexion � la base de donn�e'.mysql_error();

?>