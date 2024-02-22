<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Badan Pasien</h5>

          <?= form_open('data-berat-badan/update', ['method' => 'post']); ?>
        <input type="hidden" name="ID_lapor" value="<?= $lapor_bb['ID_lapor']; ?>">
        <input type="hidden" name="ID_Pasien" value="<?= $lapor_bb['ID_Pasien']; ?>">
       
        <div class="form-group mb-3">
            <label for="berat_badan">Berat Badan</label>
            <input type="text" class="form-control" id="berat_badan" name="berat_badan" value = "<?= $lapor_bb['berat_badan']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="created_at">Tanggal</label>
            <input type="date" class="form-control" id="created_at" name="created_at" value = "<?= $lapor_bb['created_at']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <?= form_close(); ?>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php include('layouts/footer.php'); ?>