<?php 

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'dashboard':
            include "content/dashboard.php";
            break;

        case 'profile':
            include "content/profile.php";
            break;

        case 'pengunjung':
            include "content/pengunjung.php";
            break;

        case 'petugas':
            include "content/petugas.php";
            break;

        case 'buku':
            include "content/buku.php";
            break;
        
        default:
            echo "<center><h3>Maaf, Halaman tidak ditemukan !</h3></center>";
            break;
    }
    
} else {
    include "content/dashboard.php";
}

?>