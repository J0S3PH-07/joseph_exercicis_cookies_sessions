<?php
session_start();
if(!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'] = ['prod1'=>0, 'prod2'=>0];
}

$afegir = $_POST['afegir'] ?? '';

if($afegir==='prod1') $_SESSION['cistella']['prod1'] += (int)$_POST['prod1'];
if($afegir==='prod2') $_SESSION['cistella']['prod2'] += (int)$_POST['prod2'];

header("Location: index.html");
exit();
?>
