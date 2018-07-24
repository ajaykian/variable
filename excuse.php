<?php
  echo
  $teachers = $_POST["teacher"];
  $students = $_POST["students"];
  $genders = $_POST["gender"];
  $exuses = $_POST["exuses"];
  $maladie = $_POST["maladie"];
  $deces = $_POST["deces"];
  $activite = $_POST["activite"];
  $autre = $_POST["autre"];
  if ($gender == "fille")
    if ($exuses = "maladie") {
      echo"Maladie d'amour, elle s'en remet pas";
    } else if ($exuses == "deces") {
      echo"Son éléphant est mort, elle n'est pas bien!";
    } else if ($exuses == "activite") {
      echo"elle est en voyage sur la lune";
    } else if ($exuses == "autre") {
      echo"elle n'avait pas envie";
    } else if ($gender == "garcon") {
    if ($exuses == "maladie") {
      echo"Maladie d'amour, il s'en remet pas";
    } else if ($exuses == "deces") {
      echo"Son éléphant est mort, il n'est pas bien!";
    } else if ($gender =="activite") {
      echo"il est en voyage sur la lune";
    } else if ($exuses == "autre") {
      echo"Il n'avait pas envie";
    }
  }
?>
 <!DOCTYPE html>
 <head>
 <title>excuse</title>
 </head>
 <html>
     <body>
         <p><?php
         echo "Chèr(e) Madame/Monsieur<br />" . $teachers ."<br />veuillez excuser ma fille/mon fils</br >" . $students . "<br />pour s'être absenter, le motif étant :<br />" . $exuses . "<br />mes salutations";
         ?></p>
        <form action="" method="post">
        <input type="text" name="students" value=""><br />Nom de l'enfant</input> <br />
        <input type="radio" name="gender" value="fille">Fille</input> <br />
        <input type="radio" name="gender" value="garcon">Garçon</input>
        <form action="" method="post"> <br />
        <input type="text" name="teacher" value=""><br />Nom de l'institutrice</input> <br />
        <input type="radio" name="exuses" value="maladie"><label for ="maladie">maladie</label> <br />
        <input type="radio" name="exuses" value="deces"><label for ="deces">deces</label> </br >
        <input type="radio" name="exuses" value="activite"><label for = "activite">activite</label> </br >
        <input type="radio" name="exuses" value="autre"><label for = "autre">autre</label> <br />
        <button type="submit" name="button">valider</button>
        </form>
        </form>
    </body>
</html>
