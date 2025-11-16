<?php
session_start();

$user = $_POST['user'];
$pwd = $_POST['pwd'];

if($user === $pwd) {
    $_SESSION['user'] = $user;
    header("Location: pagina1.php");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>
