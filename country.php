<?php
// $country = array("Belgium", "Canada", "Colombie", "Island", "India", "Jamaïca","Mongolia", "Myanmar",
//                   "Mozambia", "Norway", "Portugal");
$country = $_POST['country'];
$value = $_POST['value'];
$country = array (
  'BE' => 'Belgique',
  'CA' => 'Canada',
  'CO' => 'Colombie',
  'IS' => 'Island',
  'IN' => 'India',
  'JA' => 'Jamaïca',
  'MO' => 'Mongolia',
  'MY' => 'Myanmar',
  'MO' => 'Mozambie',
  'NO' => 'Norway',
  'PO' => 'Portugal'
);
// foreach ($country as $keys => $value) {
//   echo ($value.", <br>");
//   $keys_country++;
// }


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="custom-select" style="width:200px;">
  <select>
    <option method='POST' name="country" value="0">Select country</option>
    <option method='POST' name="country" value="BE">Belgium</option>
    <option method='POST' name="country" value="CA">Canada</option>
    <option method='POST' name="country" value="CO">Colombie</option>
    <option method='POST' name="country" value="IS">Island</option>
    <option method='POST' name="country" value="IN">India</option>'
    <option method='POST' name="country" value="JA">Jamaïca</option>
    <option method='POST' name="country" value="MN">Mangolia</option>
    <option method='POST' name="country" value="MY">Myanmar</option>
    <option method='POST' name="country" value="MO">Mozambia</option>
    <option method='POST' name="country" value="NO">Norway</option>
    <option method='POST' name="country" value="PO">portugal</option>
  </select>
  <br />
  <?php
  foreach ($country as $keys => $value) {
    echo ($value.", <br>");
    $keys_country++;
  }
   ?>
</div>
  </body>
</html>
