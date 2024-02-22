 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">


  <li class="nav-item">
    <a class="nav-link " href="/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
 <!-- End Dashboard Nav -->

 <?php if (in_groups('pasien')): ?>
  <li class="nav-item">
    <a class="nav-link collapsed" href="/data-pasien">
      <i class="bi bi-layout-text-window-reverse"></i>
      <span>Data Pasien</span>
    </a>
  </li>
  <?php endif; ?>

  <li class="nav-item">
    <a class="nav-link collapsed" href="/data-riwayat">
      <i class="bi bi-layout-text-window-reverse"></i>
      <span>Data Riwayat</span>
    </a>
  </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="/data-berat-badan">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Pelaporan Berat badan</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="/form-grafik">
      <i class='bx bx-line-chart'></i>
        <span>Grafik Berat Badan</span>
      </a>
    </li>

  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <?php if (in_groups('admin')||in_groups('nakes')): ?>
      <li>
        <a href="/data-pasien-admin">
          <i class="bi bi-circle"></i><span>Data Pasien</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if (in_groups('admin')): ?>
      <li>
        <a href="/data-nakes">
          <i class="bi bi-circle"></i><span>Data Tenaga Kesehatan</span>
        </a>
      </li>
      <?php endif; ?>
    </ul>
  </li>

  <?php if (in_groups('admin')): ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/data-artikel">
      <i class='bx bx-book-reader' ></i>
        <span>Daftar Artikel</span>
      </a>
    </li>
  <?php endif; ?>

  <li class="nav-item">
      <a class="nav-link collapsed" href="/landing-page">
      <i class='bx bx-info-square' ></i>
        <span>Pusat Edukasi</span>
      </a>
    </li>
    <?php if (in_groups('admin')): ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/pengguna">
      <i class='bx bxs-user-account'></i>
        <span>Kelola Akun</span>
      </a>
    </li>
    <?php endif; ?>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/profil">
      <i class='bx bx-user-pin'></i>
        <span>Profile</span>
      </a>
    </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="/logout">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->

  
</ul>

</aside><!-- End Sidebar-->