<?php
session_start();
$_SESSION['login'] = '';
unset($_SESSION['login']);
session_unset();
session_destroy();
header("Location: index.php");
?>