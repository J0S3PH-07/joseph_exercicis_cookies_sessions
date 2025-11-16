<?php
session_start();
$cistella = $_SESSION['cistella'] ?? ['prod1'=>0,'prod2'=>0];
$total = $cistella['prod1']*10 + $cistella['prod2']*15;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resum compra</title>
</head>
<body>

<h2>Resum de la compra</h2>
<p>Producte 1: <?php echo $cistella['prod1']; ?> unitats</p>
<p>Producte 2: <?php echo $cistella['prod2']; ?> unitats</p>
<h3>Total: <?php echo $total; ?> €</h3>

<a href="confirmar.php">Confirmar compra</a>

</body>
</html>
