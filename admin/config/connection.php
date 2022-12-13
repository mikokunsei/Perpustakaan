<?php
$servername = "localhost";
$username = "root";
$database = "perpustakaan";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Failed !". mysqli_connect_error());
}

?>