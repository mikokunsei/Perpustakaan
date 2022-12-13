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
                <h5 class="card-title">Tabel Pengunjung</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Tanggal dibuat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "config/connection.php";
                        $no = 1;

                        $query = mysqli_query($conn, "SELECT * FROM pengunjung ORDER BY created_at DESC");
                        while ($data = mysqli_fetch_array($query)) {

                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['tgl_lahir'] ?></td>
                                <td><?= $data['jenis_kelamin'] ?></td>
                                <td><?= $data['no_telp'] ?></td>
                                <td><?= $data['created_at'] ?></td>
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