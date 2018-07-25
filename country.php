<?php
// $country = array("Belgium", "Canada", "Colombie", "Island", "India", "Jamaïca","Mongolia", "Myanmar",
//                   "Mozambia", "Norway", "Portugal");
$coutry = array (
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
)
foreach ($country as $key => $value) {
  echo ($value.", <br>");
  $key_country++;
}


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
    <option value="0">Select country</option>
    <option value="BE">Belgium</option>
    <option value="CA">Canada</option>
    <option value="CO">Colombie</option>
    <option value="IS">Island</option>
    <option value="IN">India</option>
    <option value="JA">Jamaïca</option>
    <option value="MN">Mangolia</option>
    <option value="MY">Myanmar</option>
    <option value="MO">Mozambia</option>
    <option value="NO">Norway</option>
    <option value="PO">portugal</option>
  </select>
</div>
  </body>
</html>
