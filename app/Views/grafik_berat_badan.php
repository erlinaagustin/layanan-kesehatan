<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Berat Badan Pasien</h5>
                <!-- Tempatkan canvas untuk grafik -->
                <canvas id="lineChart" style="max-height: 400px;"></canvas>

                <!-- Script untuk menggambar grafik -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#lineChart'), {
                            type: 'line',
                            data: {
                                labels: JSON.parse('<?= $labels; ?>'),
                                datasets: [{
                                    label: 'Berat Badan',
                                    data: JSON.parse('<?= $beratData; ?>'),
                                    fill: false,
                                    borderColor: 'rgb(75, 192, 192)',
                                    tension: 0.1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    });
                </script>
                 </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include('layouts/footer.php'); ?>
