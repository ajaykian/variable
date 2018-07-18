<?php
$gender = "femme";
$age = "";
if ($age < 12) {
    if ($gender < 12) {
        echo "<br />Salut petite";
    }else {
    echo "<br />Salut petit!";
    }
} else if ($age >= 12 AND $age <= 18) {
    if ($gender >= 12 AND $gender <= 18) {
        echo "<br /> Salut l'adolescente";
    } else {
    echo "<br />Salut l'ado";
    }
} else if ($age > 18 AND $age <= 115) {
    if ($gender > 18 AND $gender <= 115) {
        echo "<br />Salut l'adulteee!";
    } else {
    echo "<br />Salut l'adult!";
    }
} else if ($age > 115) {
    if ($gender > 115) {
        echo "<br />Toujours vivante?";
    } else {
    echo "<br />Toujours vivant?";
    }
} 
?>

<!DOCTYPE html>
<head>
    <title>condition</title>   
</head>
<html>
    <body>
         
        <!-- <form action="conditions.php" method="GET"><input type="number" value="number" name="valider"></form>
         <form action="condition.php" method="GET"><input type="radio" value="text" name="valider">Homme</form>
         <form action="conditions.php" method="GET" ><input type="radio" value="text" name="valider">Femme</form> -->
         

    </body>
</html>
