<?php

include "../config/connection.php";

$nama = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$alamat = $_POST['address'];
$telp = $_POST['phone'];

$password_encrypted = md5($password);

if ($password == $confirm_password) {

    $query = mysqli_query($conn, "INSERT INTO petugas (nama, username, password, alamat, no_telp) VALUES ('$nama', '$username', '$password_encrypted', '$alamat', '$telp') ");

    if ($query) {
        echo '<script language="javascript" type="text/javascript">alert("Pengguna Berhasil dibuat! silahkan login")</script>';
        echo '<script>window.location="../login"</script>';
    } else {
        echo '<script language="javascript" type="text/javascript">alert("Error Query")</script>';
        echo '<script>window.location="../register"</script>';
    }
} else {
    echo '<script language="javascript" type="text/javascript">alert("Password tidak sesuai!")</script>';
    echo '<script>window.location="../register"</script>';
}
