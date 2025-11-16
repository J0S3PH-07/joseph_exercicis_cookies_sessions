<?php
session_start();
unset($_SESSION['cistella']);
header("Location: index.html");
exit();
?>
