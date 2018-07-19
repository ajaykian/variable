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
   
   $temperature1 = 13;
if($temperature1 >= 20) {
       $action_a_faire = "<br />être en caleçon";
   } else if ($temperature1 >= 15) {
       $action_a_faire = "<br />garder ses vêtments";
   } else {
       $action_a_faire = "<br />Doubler ses vêtements";
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
        
        
        
    
    