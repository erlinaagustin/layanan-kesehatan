<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Artikel</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Artikel</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <a href="/data-artikel/tambah" class="btn btn-primary mb-3">+ Tambah</a>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Artikel</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Artikel</th>
                <th>Judul Artikel</th>
                <th>Deskripsi</th>
                <th>Link</th>
                <th>Action</th>
              
              </tr>
            </thead>
            <tbody>
                <?php if(!empty($artikel) && is_array($artikel)): ?>
                    <?php $no = 1; ?>
                        <?php foreach($artikel as $item): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo esc($item['id_artikel']); ?></td>
                                <td><?php echo esc($item['judul']); ?></td>
                                <td><?php echo esc($item['deskripsi']); ?></td>
                                <td><?php echo esc($item['link']); ?></td>
                                <td>
                                    <a href="/data-artikel/edit/<?php echo $item['id_artikel']; ?>"><i class='bx bxs-edit'></i></a>
                                    &nbsp;<!-- Menambahkan spasi -->
                                    <a href="/data-artikel/delete/<?php echo $item['id_artikel']; ?>"><i class='bx bxs-trash' ></i></a>
                                </td>
                               
                            </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                 <td colspan="3">Tidak ada data data Pasien.</td>
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