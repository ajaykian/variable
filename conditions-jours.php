<?php
$note = $_POST["gender"];
$note = $_POST["age"];
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

      <form action="" method="POST"><input name="age" type="number" value="">
      <button type="submit" name="button">valider</button>
      </form>

      <form action="" method="post"><input type="radio" value="" name="gender">femme</form>
      <form action="" method="post"><input type="radio" value="" name="gender">homme</form>


    </body>
</html>
