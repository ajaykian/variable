<?php
    $me = array (
          "prenom"      => "Ajay<br />",
          "aime_le_foot"      => "true<br />",
          "age"               => 41,
          "hobbies"     =>array("peindre", "bricoler", "film"),
          "papa"        => $papa,
        );
    $papa = array (
            "prenom"    =>  "Govind<br />",
            "aime_le_foot"    => "false<br />",
            "age"             =>  71,
            "hobbies"   =>array("cuisinier", "musique", "bricoler"),
        );
    // array_push($me, "taxidermie<br />");
    // $me["prenom"] = "Dieudonné";

    $ame_soeur = array (
          "prenom"    => "Wonderwoman<br />",
          "aime_le_combat"      => "true",
          "age"                 => 250,
          "hobbies"   => array("justice", "épée", "laceau"),
    );
    $toi = array (
          "physique"  => "baraquée<br />",
          "cheveux"   => "noir",
          "taille"    => "grande",
          "corps"     => "de_rêve"
    );
    $enfant = array (
          "super_pouvoir" => "true",
          "hobbies"       => array("voler", "bricoler", "justice"),
    );
    $result = array_intersect($ame_soeur["hobbies"], $enfant["hobbies"]);
    $result1 = array_merge($ame_soeur["hobbies"], $enfant["hobbies"]);

 ?>
 <!DOCTYPE html>
   <html>
     <head>
       <meta charset="utf-8">
       <title></title>
     </head>
     <body>
       <?php
          echo $me["prenom"];
          echo $me["aime_le_foot"];
          echo $me["age"];
          echo '<pre>';
          print_r($me);
          echo '</pre>';
          echo count($papa[hobbies]);
          echo count($me[hobbies]);
          echo count($papa + $me[hobbies]);
          print_r($me);
          echo $me["prenom"];
          print_r($result);
          print_r($result1);
        ?>
     </body>
   </html>
