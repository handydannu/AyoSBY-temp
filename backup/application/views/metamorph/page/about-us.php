<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            
            <!-- S: Row 2 Column -->
            <div class="row">

              <?php //echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              <article class="col-md-8">

                <!-- S: Breadcrumb -->
                <!-- <div class="col-news-breadcrumb"> -->
                  <!-- <ul> -->
                    <!-- <li><a href="<?php echo site_url(); ?>">Home</a></li> -->
                    <!-- <li><a href="" class="rss" title="RSS Feed"><i class="fa fa-rss"></i></a></li> -->
                  <!-- </ul> -->
                <!-- </div> -->
                <!-- E: Breadcrumb -->

                <div class="col-news-title col-page-title">
                  <h3>About Us<!-- Tentang Kami --></h3>
                </div>
                <div class="col-news-content col-page-content">
                  <p>Mengakses berita melalui internet sudah menjadi gaya hidup. Seiring dengan arus tersebut kami mencoba hadir untuk melengkapi pilihan dan kebutuhan pembaca, berharap membuat hidup anda makin berwarna.</p>

                  <p>&nbsp;</p>

                  <h2 class="page-subheader">Mengapa <span class="ayo-orange">Ayo</span>Bogor?</h2>

                  <p>Tak dipungkiri lokalitas dan kecintaan pada tempat berpijak atau berasal sejatinya ada di setiap diri manusia. Karena itu segenap peristiwa, kabar atau kehebohan akan selalu menarik bagi mereka yang terlibat di dalamnya. Mencoba memenuhi kebutuhan dan kerinduan akan kabar dan cerita-cerita tempat bernaung inilah <strong><span class="ayo-orange">Ayo</span>Bogor</strong> hadir dengan menawarkan konten situs berita yang lebih banyak bercerita tentang Bogor.</p>

                  <p>Sejalan dengan semangat untuk memberi yang terbaik bagi Bogor tercinta tentu kami tak cuma menawarkan berita.</p>

                  <p>Kami juga memberikan ruang yang sangat luas bagi masyarakat dan komunitas untuk turut memberikan informasi melalui kanal AyoNetizen. </p>

                  <p>Jadi, mimpi besar kami semoga <strong><span class="ayo-orange">Ayo</span>Bogor</strong> tak hanya menjadi tempat mencari berita, tetapi juga rumah besar bagi interaksi dan informasi komunitas kota Bogor.</p>

                  <p>Semoga.</p>

                  <p>&nbsp;</p>

                  <h2 class="page-subheader">Visi</h2>
                  <p class="page-content-vision">&quot;Menjadi perusahaan multimedia nomor satu di Bogor&quot;.</p>

                  <p>&nbsp;</p>

                  <h2 class="page-subheader">Misi</h2>
                  <ol class="list-page-subheader list-page-subheader-mission">
                    <li>
                      <span class="list-page-point">1</span>
                      <span class="list-page-content">Mendekatkan diri dengan masyarakat di <strong>Bogor</strong></span>
                    </li>
                    <li>
                      <span class="list-page-point">2</span>
                      <span class="list-page-content">Menyajikan berita seputar <strong>Bogor</strong></span>
                    </li>
                    <li>
                      <span class="list-page-point">3</span>
                      <span class="list-page-content">Wadah sekaligus rumah bagi masyarakat di <strong>Bogor</strong> dalam berbagai informasi</span>
                    </li>
                    <li>
                      <span class="list-page-point">4</span>
                      <span class="list-page-content">Menyajikan informasi yang <strong>inspiratif</strong>, <strong>komunikatif</strong> dan <strong>semangat positif</strong>.</span>
                    </li>
                  </ol>
                </div>

              </article>
              <!-- E: Content Container -->

              <!-- S: Sidebar -->
              <?php $this->load->view($this->config->item('template_name') . 'content-sidebar'); ?>
              <!-- E: Sidebar -->
            </div>
            <div class="clearfix"></div>
            <!-- E: Row 2 Column -->
          </div>
        </main>
        <!-- E: Main Container -->

<?php $this->load->view($this->config->item('template_name') . 'footer'); ?>