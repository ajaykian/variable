<?php
  $temperature = 16;
if( $temperature >= 15 ) {
    // code à exécuter si la condition est TRUE
    $vetement_du_jour = "T-shirt";
   } else {
     // code à exécuter si la condition est FALSE
     $vetement_du_jour = "Pull-over";
   }
?>
<?php   
   
   $temperature1 = 23;
if($temperature1 = 30 AND $temperature1 >= 25) {
       $action_a_faire = "<br />être en caleçon";
   } else if ($temperature1 = 24 AND $temperature1 >+ 10) {
       $action_a_faire = "<br />garder ses vêtments";
   }
?>

<!DOCTYPE html>
<head>
<title>condition</title>   
</head>
<html>
    <body>
        <?php
          
            echo $vetement_du_jour;
        ?>
        <?php
           
            echo $action_a_faire;
        ?>
    </body>
</html>    
        
        
        
    
    