<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login");
}

include "layouts/header.php";
include "layouts/sidebar.php";

include "layouts/pages.php";
include "layouts/footer.php";
?>