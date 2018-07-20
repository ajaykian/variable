<?php
$gender = $_POST["gender"];
$age = $_POST["age"];
$language = $_POST["language"];
if ($language == "French") {
  if ($gender == "femme") {
    if ($age < 12) {
      $answer = "Salut, petite fille";
    } else if ($age >= 12 AND $age < 18) {
      $answer = "Wesh, l'adolescente";
    } else if ($age >=18 AND $age <= 115) {
      $answer = "Bonjour, madame";
    } else if ($age > 115) {
      $answer = "T'es toujours pas décidé a crever!!!";
    }
  } else if ($gender == "homme") {
    if ($age < 12) {
      $answer = "Salut, gamin";
    } else if ($age >= 12 AND $age < 18) {
      $answer = "Salut, l'ado";
    } else if ($age >=18 AND $age <= 115) {
      $answer = "Bonjour, monsieur";
    } else if ($age > 115) {
      $answer = "T'es toujours en vie?";
    }
  }
}  else if ($language == "English") {
  $answer = "You should learn french";
}
?>

<!DOCTYPE html>
<head>
    <title>condition</title>
</head>
<html>
    <body>
        <p><?php echo $answer ?></p>
      <form action="" method="POST">
        <input type="radio" value="English" name="language"><label for ="English">English</label>
        <input type="radio" value="French" name="language"><label for ="French">Français</label> <br />
        <input type="radio" value="femme" name="gender"><label for ="femme">femme</label>
        <input type="radio" value="homme" name="gender"><label for ="homme">homme</label> <br />
        <input name="age" type="number" value="">
        <button type="submit" name="button">valider</button>
      </form>







    </body>
</html>
