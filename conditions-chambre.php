
<?php
$chambre_est_sale = true;
if ($chambre_est_sale) {
    echo "Ta chambre , on dirait la cage d'un bonobo!";
} else {
    echo "Ta chambre est trop propre, vis un peu";
}
?>


<?php
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
?>

<!DOCTYPE html>
<head>
<title>condition</title>   
</head>
<html>
    <body>
         <?php
        
        echo $chambre_est_sale1;
        ?>    
   </body>
</html>
     