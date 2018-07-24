<?php
//print_r($_POST);
$note = $_POST["note"];
if ($note <= "5") {
    $professor = "Ce travail est nul";
} elseif ($note >= "6" AND $note <= "9") {
    $professor = "Ce travail est pas terrible";
} elseif ($note == "10") {
    $professor = "tout juste!";
} elseif ($note >= "11" AND $note <= "14") {
    $professor = "C'est pas mal";
} elseif ($note >= "15" AND $note <= "18") {
    $professor = "Bravo";
} elseif ($note == "19" OR $note == "20") {
    $professor = "Police! Arrêtez ce tricheur!";
} elseif ($note >= 21) {
  $professor = "Faut pas rêver!!!";
}
?>

<!DOCTYPE html>
<head>
<title>condition</title>
</head>
<html>
    <body>
        <?php echo $professor; ?>

      <form action="" method="POST"><input name="note" type="number" value="">
        <button type="submit" name="button">valider</button>
      </form>
    </body>
</html>
