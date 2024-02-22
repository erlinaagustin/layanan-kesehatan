<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Riwayat Pasien</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Riwayat</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <a href="/data-riwayat/tambah" class="btn btn-primary mb-3">+ Tambah</a>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Riwayat</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Riwayat Kesehatan</th>
                <th>Rekomendasi Gizi</th>
                <th>created at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php if(!empty($riwayat) && is_array($riwayat)): ?>
                    <?php $no = 1; ?>
                        <?php foreach($riwayat as $item): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo esc($item['NamaPasien']); ?></td>
                                <td><?php echo esc($item['riwayat_kesehatan']); ?></td>
                                <td><?php echo esc($item['rekomendasi_gizi']); ?></td>
                                <td><?php echo esc($item['created_at']); ?></td>
                                <td>
                                    <a href="/data-riwayat/edit/<?php echo $item['ID_riwayat']; ?>"><i class='bx bxs-edit'></i></a>
                                    &nbsp;<!-- Menambahkan spasi -->
                                    <a href="/data-riwayat/delete/<?php echo $item['ID_riwayat']; ?>"><i class='bx bxs-trash' ></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                 <td colspan="3">Tidak ada data kategori.</td>
                            </tr>
                        <?php endif; ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include('layouts/footer.php'); ?>