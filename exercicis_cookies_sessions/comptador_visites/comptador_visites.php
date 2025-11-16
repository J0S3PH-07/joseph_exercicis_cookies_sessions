<?php
if(isset($_COOKIE['visites'])) {
    $visites = $_COOKIE['visites'] + 1;
} else {
    $visites = 1;
}
setcookie("visites", $visites, time()+86400);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Comptador Visites</title>
</head>
<body>

<h2>Has visitat aquesta pàgina <?php echo $visites; ?> vegades.</h2>

</body>
</html>
