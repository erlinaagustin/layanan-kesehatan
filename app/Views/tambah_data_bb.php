<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Berat Badan Pasien</h5>

          <?= form_open('data-berat-badan/simpan', ['method' => 'post']); ?>
       
        <div class="form-group mb-3">
            <label for="ID_Pasien">ID Pasien</label>
            <input type="text" class="form-control" id="ID_Pasien" name="ID_Pasien"  required>
        </div>
        <div class="form-group mb-3">
            <label for="berat_badan">Berat Badan</label>
            <input type="text" class="form-control" id="berat_badan" name="berat_badan"  required>
        </div>
        <div class="form-group mb-3">
            <label for="created_at">Tanggal</label>
            <input type="date" class="form-control" id="created_at" name="created_at"  required>
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