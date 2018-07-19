  <?php
  //$genre = "femme";

  //if($genre == "femme") {
    //$bonjour = "Madame";
  //} else if ($genre =="homme") {
    //$bonjour = "Monsieur";
  //}

   ?>
   <?php
  //echo $bonjour;
  ?>

<?php
$genre = "homme";
$bonjour = ($genre = "femme" OR $genre = "homme") ? "Madame" : "Monsieur";
 ?>
<?php
echo $bonjour;
 ?>
