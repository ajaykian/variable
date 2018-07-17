
<?php
if( $temperature >= 15 ) {
    // code à exécuter si la condition est TRUE
    $vetement_du_jour = "T-shirt";
   } else {
     // code à exécuter si la condition est FALSE
     $vetement_du_jour = "Pull-over";
   }
   


   if($temperature <= 30) {
       $action_a_faire = "être en caleçon";
   } else {
       $action_a_faire = "garder ses survêtments";
   }



$chambre_est_sale = true;
if ($chambre_est_sale) {
    echo "Ta chambre , on dirait la cage d'un bonobo!";
} else {
    echo "Ta chambre est trop propre, vis un peu";
}



$chambre_est_sale1 = "maniaque";


if ($chambre_est_sale1 == "degoutante") {
    echo "<br />Ta chambre est dégoutante!!!";
} else if ($chambre_est_sale1 == "sale") {
    echo "Ta chambre est salle!!";
} else if ($chambre_est_sale1 == "en ordre") {
    echo "<br /> Bravo, poussin!";
} else if ($chambre_est_sale1 == "immacule") {
    echo "<br />T'es vraiment un ange?";
} else if ($chambre_est_sale1 == "maniaque") {
    echo "<br />Demain, on va chez le psy";
}

$nowHours = new Date().getHours();
if ($now_hour >= 5 AND <= 9) {
    echo "bonjour!";
} else if ($nowHours > 9 AND <= 12) {
    echo "Bonne journée!";
} else if ($nowHours > 12 AND <= 16) {
    echo "Bon après-midi!";
} else if ($nowHours > 16 AND <= 21) {
    echo "Bonne soirée!";
} else {
    echo "Bonne nuit!";
}

   
?>
<!DOCTYPE html>
<head>
<title>condition</title>   
</head>
<html>
<body>
<br />
   <?php
   $temperature = 15;
  echo $vetement_du_jour; 
   ?>
   <br />
   <?php
   $temperature = 34;
   echo $action_a_faire;
   ?>
   <br />
   
   <?php
   
   echo $chambre_est_sale1;
   ?>
   <br />
   
   <?php
   echo $nowHours;
   ?>
  


</body>
</html>
