<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página 1</title>
</head>
<body>

<h3>Usuari: <?php echo $_SESSION['user']; ?></h3>

<h1>Página 1</h1>
<a href="pagina2.php">Ir a Página 2</a>

</body>
</html>
