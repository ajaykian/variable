<?php
if ($note == 1 AND $note <= 3) {
    echo "Ce travail est nul";
} else if ($note == 6 AND $note<= 9) {
    echo "Ce traavail est pas terrible";
} else if ($note == 10) {
    echo "tout juste!";
} else if ($note == 11 AND $note <= 14) {
    echo "C'est pas mal";
} else if ($note == 15 AND $note <= 18) {
    echo "Bravo";
} else if ($note == 19 AND $note == 20) {
    echo "Police! Arrêtez ce tricheur!";
}
?>

<!DOCTYPE html>
<head>
<title>condition</title>   
</head>
<html>
    <body>
        <?php
            $note = "";
            echo $note;
        ?>
      
      <form action="" method="GET"><input type="number"></form>

    </body>
</html>
  
      
        
        
       
        
        
        
        

        
       