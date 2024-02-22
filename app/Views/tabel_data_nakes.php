<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Nakes</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Nakes</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <a href="/data-nakes/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Tenaga Kesehatan</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Spesialisasi</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php if(!empty($nakes) && is_array($nakes)): ?>
                    <?php $no = 1; ?>
                        <?php foreach($nakes as $item): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo esc($item['nama']); ?></td>
                                <td><?php echo esc($item['jabatan']); ?></td>
                                <td><?php echo esc($item['spesialisasi']); ?></td>
                                <td><?php echo esc($item['alamat']); ?></td>
                                <td><?php echo esc($item['no_telepon']); ?></td>
                                <td>
                                    <a href="/data-nakes/edit/<?php echo $item['id_nakes']; ?>"><i class='bx bxs-edit'></i></a>
                                    &nbsp;<!-- Menambahkan spasi -->
                                    <a href="/data-nakes/delete/<?php echo $item['id_nakes']; ?>"><i class='bx bxs-trash' ></i></a>
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