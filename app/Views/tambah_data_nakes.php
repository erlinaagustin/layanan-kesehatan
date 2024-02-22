<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Tenaga Kesehatan</h5>

          <?= form_open('data-nakes/simpan', ['method' => 'post']); ?>
       
        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama"  required>
        </div>
        <div class="form-group mb-3">
            <label for="'jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan"  required>
        </div>
        <div class="form-group mb-3">
            <label for="'spesialisasi">Spesialisasi</label>
            <input type="text" class="form-control" id="spesialisasi" name="spesialisasi"  required>
        </div>
        <div class="form-group mb-3">
            <label for="'alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"  required>
        </div>
        <!-- <div class="form-group mb-3">
            <label for="'alamat">Alamat</label>
            <textarea class="form-control" id="'alamat" name="'alamat"></textarea>
        </div> -->
        <div class="form-group mb-3">
            <label for="'no_telepon">Nomor HP</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon"  required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    <?= form_close(); ?>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php include('layouts/footer.php'); ?>