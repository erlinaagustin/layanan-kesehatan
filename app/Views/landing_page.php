<?php include('layouts/header_lp.php'); ?>
<?php include('layouts/hero_lp.php'); ?>


<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Jaga Gizi</h3>
              <h2>Sistem Informasi Kesehatan Ibu Hamil</h2>
              <p>
                Kami adalah tim yang berdedikasi untuk menyediakan informasi kesehatan yang akurat dan berguna untuk ibu hamil. Tujuan kami adalah untuk membantu ibu hamil dalam menjaga kesehatan mereka selama masa kehamilan. Kami menyediakan informasi terkini tentang gizi, dan nasihat kesehatan lainnya yang diperlukan selama kehamilan.
              </p>
              <div class="text-center text-lg-start">
                <a href="#article" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo base_url(); ?>/landing_page/assets/img/about1.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

     <!-- ======= Blog Section ======= -->
     <section id="article" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">



            <?php foreach ($artikel as $item): ?>
            <article class="entry">

              <div class="entry-img">
                  <img src="<?php echo base_url(); ?>/uploads/<?php echo $item['thumbnail']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                  <a href="<?php echo $item['link']; ?>"><?php echo $item['judul']; ?></a>
              </h2>

              <div class="entry-content">
                  <p>
                      <?php echo $item['deskripsi']; ?>
                  </p>
                  <div class="read-more">
                      <a href="<?php echo $item['link']; ?>">Read More</a>
                  </div>
              </div>

            </article><!-- End blog entry -->
            <?php endforeach; ?>


            <div class="blog-pagination">
    <ul class="justify-content-center">
        <?php if ($pager): ?>
            <?php echo $pager->links('group1', 'default_full'); ?>
        <?php endif; ?>
    </ul>
</div>


          </div><!-- End blog entries list -->

         
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include('layouts/footer_lp.php'); ?>