<?php
  $age = "10";
  $sexe = "femme, homme";
    if ($sexe = "femme" AND $age >= 21 AND $age <= 40 ) {
    //echo "Bonjour, bienvenue parmi nous!";
    } else {
    //echo "Désolé, vous ne remplissez pas les critères de sélection.";
    }
  print_r($_POST);
  $age1 = 21 <= 40;
  $sexe1 = "femme";
    if ($sexe1 = true AND $sexe1 = true) {
      echo "<br />Bonjour, bienvenue parmi nous!";
    if ($sexe1 = false or $sexe1 = false)
      echo "<br />Désolé, vous ne remplissez pas les critères de sélection";
    }
?>

 <!DOCTYPE html>
 <head>
 <title>condition</title>
 </head>
 <html>
     <body>
         <?php

         ?>
         <form action="" method="POST"><input name="sexe1" type="radio" value="femme">femme</input></form>
         <form action="" method="POST"><input name="sexe1" type="radio" value="homme">homme</input></form>
         <form action="" method="POST"><input name="age1" type="number" value=""></input>
           <button type="submit" name="button">valider</button>
         </form>



     </body>
 </html>
