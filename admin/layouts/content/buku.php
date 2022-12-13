<main id="main" class="main">

    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tabel Buku</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Jumlah Halaman</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "config/connection.php";
                        $no = 1;

                        $query = mysqli_query($conn, "SELECT * FROM buku ORDER BY id ASC");
                        while ($data = mysqli_fetch_array($query)) {

                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $data['judul'] ?></td>
                                <td><?= $data['penulis'] ?></td>
                                <td><?= $data['kategori'] ?></td>
                                <td><?= $data['penerbit'] ?></td>
                                <td><?= $data['jml_hal'] ?></td>
                                <td><?= $data['tahun_terbit'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>
    </section>

</main><!-- End #main -->