<?php
  $genre = "femme";

  if($genre == "femme") {
    $bonjour = "Madame";
  } else if ($genre =="homme") {
    $bonjour = "Monsieur";
  }

?>
<?php
//echo $bonjour;
?>

<?php
  $genre = "fe";
  $bonjour = ($genre == "femme") ? "Madame" : "Monsieur";
?>
<?php
  echo $bonjour;
?>
