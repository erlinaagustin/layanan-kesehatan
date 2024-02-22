<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Artikel</h5>

          <?= form_open('data-artikel/update', ['method' => 'post', 'enctype' => 'multipart/form-data']); ?>
        <input type="hidden" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
        <div class="form-group mb-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $artikel['judul']; ?>" required>
        </div>
          <!-- Pilih File Gambar -->
          <div class="form-group mb-3">
                            <label for="image">Pilih File Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image" onchange="updateLabel()">
                                <label class="custom-file-label" for="image">Pilih file...</label>
                            </div>
                        </div>
                
                
        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $artikel['deskripsi']; ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="'link">Link</label>
            <input type="text" class="form-control" id="link" name="link" value="<?= $artikel['link']; ?>" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <?= form_close(); ?>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<script>
    function updateLabel() {
        var input = document.getElementById('image');
        var label = input.nextElementSibling;
        label.innerText = input.files[0] ? input.files[0].name : 'Pilih file...';
    }
</script>

<?php include('layouts/footer.php'); ?>