<?php
$hour = date("H:i");
var_dump($hour);
if ($hour >= "05:00" AND $hour <= "09:00") {
    echo "bonjour!";
} else if ($hour >= "09:01" AND $hour <= "12:00") {
    echo "Bonne journée!";
} else if ($hour >= "12:01" AND $hour <= "16:00") {
    echo "Bon après-midi!";
} else if ($hour >= "16:01" AND $hour <= "21:00") {
    echo "Bonne soirée!";
} else {
    echo "Bonne nuit!";
}
?>

<!DOCTYPE html>
<head>
<title>condition</title>   
</head>
<html>
    <body>
        <?php
        echo $nowHours;
        ?>
    </body>
</html>