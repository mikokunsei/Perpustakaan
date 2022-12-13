<?php

session_start();

include "../config/connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$password_encrypted = md5($password);

$query = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password_encrypted' ");
$check_data = mysqli_num_rows($query);

if ($check_data == 1) {
    
    header("location:../dashboard");

    $data = mysqli_fetch_array($query);

    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

} else {
    echo '<script language="javascript" type="text/javascript" >alert("Incorrect username or password, please check again !")</script>';
}


?>