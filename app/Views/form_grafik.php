<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Berat Badan Pasien</h5>


          <form action="<?= base_url('berat-badan/grafik') ?>" method="get">
    <div class="form-group mb-3">
        <label for="pasienDropdown">Pilih Pasien</label>
        <select class="form-control" id="pasienDropdown" name="ID_Pasien">
            <?php foreach($pasien as $p): ?>
                <option value="<?= $p['ID_Pasien']; ?>"><?= $p['ID_Pasien'] . '-' . $p['Nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Tampilkan Grafik</button>
</form>



            </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
