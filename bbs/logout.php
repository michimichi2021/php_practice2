<?php
session_start();

unset($_SESSION['id']);
unset($_SESSIOn['name']);

header('Location: login.php'); exit();
?>
