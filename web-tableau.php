<?php
  $web_developement = array("frontend", "backend");
  $frontend = array ();
  $backend = array ();
  array_push($backend, "xhtml");
  array_push($backend, "Ruby_on_rail");
  array_push($frontend, "css");
  array_push($backend, "Flash");
  array_push($frontend, "Javascript");
  $backend["xhtml"] = "html";
  unset($backend[2]);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      '<pre>';
        print_r($backend);
      '</pre>';
     ?>
    <?php
      '<prev>';
        print_r($frontend);
      '</prev>';
     ?>
  </body>
</html>
