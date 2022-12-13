<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" id="item-dashboard" href="dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" id="item-perpustakaan" data-bs-target="#library-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bookshelf"></i><span>Perpustakaan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="library-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="buku" id="buku-link">
            <i class="bi bi-circle"></i><span>Buku</span>
          </a>
        </li>
        <li>
          <a href="penerbit" id="penerbit-link">
            <i class="bi bi-circle"></i><span>Penerbit</span>
          </a>
        </li>
        <li>
          <a href="penulis" id="penulis-link">
            <i class="bi bi-circle"></i><span>Penulis</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" id="item-layanan" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-clipboard-check"></i><span>Layanan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="service-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="peminjaman-buku" id="pinjam-link">
            <i class="bi bi-circle"></i><span>Peminjaman Buku</span>
          </a>
        </li>
        <li>
          <a href="sumbangan-buku" id="sumbang-link">
            <i class="bi bi-circle"></i><span>Sumbangan Buku</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" id="item-pengguna" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="pengunjung" id="pengunjung-link">
            <i class="bi bi-circle"></i><span>Pengunjung</span>
          </a>
        </li>
        <li>
          <a href="petugas" id="petugas-link">
            <i class="bi bi-circle"></i><span>Petugas</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->


    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" id="item-profile" href="profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" id="item-contact" href="#">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

  </ul>

</aside><!-- End Sidebar-->

<script>
  const url = window.location.href;

  const lastSegment = url.split("/").pop();

  console.log(lastSegment); // "playlist"

  if (lastSegment == ''|'dashboard') {
    var a = document.getElementById("item-dashboard");
    a.classList.remove("collapsed");
  } else if (lastSegment == 'buku') {
    var a = document.getElementById("item-perpustakaan");
    var b = document.getElementById("library-nav");
    var c = document.getElementById("buku-link");
    a.classList.remove("collapsed");
    b.classList.add("show");
    c.classList.add("active");
  } else if (lastSegment == 'penerbit') {
    var a = document.getElementById("item-perpustakaan");
    var b = document.getElementById("library-nav");
    var c = document.getElementById("penerbit-link");
    a.classList.remove("collapsed");
    b.classList.add("show");
    c.classList.add("active");
  } else if (lastSegment == 'penulis') {
    var a = document.getElementById("item-perpustakaan");
    var b = document.getElementById("library-nav");
    var c = document.getElementById("penulis-link");
    a.classList.remove("collapsed");
    b.classList.add("show");
    c.classList.add("active");
  } else if (lastSegment == 'peminjaman-buku') {
    var a = document.getElementById("item-layanan");
    var b = document.getElementById("services-nav");
    var c = document.getElementById("pinjam-link");
    a.classList.remove("collapsed");
    b.classList.add("show");
    c.classList.add("active");
  } else if (lastSegment == 'sumbangan-buku') {
    var a = document.getElementById("item-layanan");
    var b = document.getElementById("services-nav");
    var c = document.getElementById("sumbang-link");
    a.classList.remove("collapsed");
    b.classList.add("show");
    c.classList.add("active");
  } else if (lastSegment == 'pengunjung') {
    var a = document.getElementById("item-pengguna");
    var b = document.getElementById("users-nav");
    var c = document.getElementById("pengunjung-link");
    a.classList.remove("collapsed");
    b.classList.add("show");
    c.classList.add("active");
  } else if (lastSegment == 'petugas') {
    var a = document.getElementById("item-pengguna");
    var b = document.getElementById("users-nav");
    var c = document.getElementById("petugas-link");
    a.classList.remove("collapsed");
    b.classList.add("show");
    c.classList.add("active");
  } else if (lastSegment == 'profile') {
    var a = document.getElementById("item-profile");
    a.classList.remove("collapsed");
  }
</script>