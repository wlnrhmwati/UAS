<?php
$server   = "localhost";
$username = "root";
$password = "root";
$database = "resto";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>